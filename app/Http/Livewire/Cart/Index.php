<?php

namespace App\Http\Livewire\Cart;

use App\Models\Distributor;
use App\Repositories\Order\OrderRepositoryInterface;
use App\Services\CartService;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Index extends Component
{
    public $contactNumber;
    public $shippingAddress;
    public $distributor;

    public $cartQtys;
    public $total;
    public $totalQuantity;
    public $content;
    protected $listeners = [
        'productAddedToCart' => 'updateCart',
    ];

    private $cartService;

    public function boot(
        CartService $cartService,
    ) {
        $this->cartService = $cartService;
    }

    public function mount(): void
    {
        $this->updateCart();
    }

    public function rules()
    {
        return [
            'contactNumber' => ['required', 'string', 'max:100'],
            'shippingAddress' => ['required', 'string', 'min:3', 'max:255'],
            'distributor' => ['required'],
        ];
    }

    public function render()
    {
        $distributors = Distributor::all();
        return view('livewire.cart.index', compact('distributors'));
    }

    public function updated($propertyName, $value)
    {
        $this->resetValidation($propertyName);

        $this->validateOnly($propertyName);
    }


    public function removeFromCart(string $id): void
    {
        $this->cartService->remove($id);
        $this->updateCart();
    }

    public function clearCart(): void
    {
        $this->cartService->clear();
        $this->updateCart();
    }

    public function updateCartItem(string $id, string $action): void
    {
        $this->cartService->update($id, $action);
        $this->updateCart();
    }

    public function updatedCartQtys($qty, $id)
    {
        $qty = (!$qty || $qty < 1) ? 1 : $qty;

        $this->cartQtys[$id] = $qty;
        $this->cartService->setQuantity($id, $qty);
        $this->updateCart();
    }

    public function updateCart()
    {
        $this->total = $this->cartService->total();
        $this->totalQuantity = $this->cartService->totalQuantity();
        $this->content = $this->cartService->content();

        $this->content->each(function ($item, $key) {
            $this->cartQtys[$key] = $this->content[$key]['quantity'];
        });
    }

    public function store(OrderRepositoryInterface $orderRepository)
    {
        DB::beginTransaction();
        try {

            if (sizeof($this->content) == 0) {
                $this->dispatchBrowserEvent('swal', [
                    'icon' => 'error',
                    'title' => 'Opps!',
                    'text' => 'Cart is empty. Please select atleast one product.',
                ]);
                return 0;
            }

            $this->validate();

            $orderRepository->create([
                'distributor_id' => $this->distributor,
                'contact_number' => $this->contactNumber,
                'shipping_address' => $this->shippingAddress,
            ]);


            DB::commit();

            $this->cartService->clear();
            $this->reset();
            $this->updateCart();

            $this->dispatchBrowserEvent('swal', [
                'icon' => 'success',
                'title' => 'Success!',
                'text' => 'Order was created successfully',
            ]);

        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
