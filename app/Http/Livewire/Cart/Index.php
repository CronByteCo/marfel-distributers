<?php

namespace App\Http\Livewire\Cart;

use App\Services\CartService;
use Livewire\Component;

class Index extends Component
{
    public $cartQtys;
    public $total;
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

    public function render()
    {
        return view('livewire.cart.index');
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
        $this->content = $this->cartService->content();

        $this->content->each(function ($item, $key) {
            $this->cartQtys[$key] = $this->content[$key]['quantity'];
        });
    }
}
