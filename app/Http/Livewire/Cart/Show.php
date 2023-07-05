<?php

namespace App\Http\Livewire\Cart;

use App\Services\CartService;
use Livewire\Component;

class Show extends Component
{
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

    public function render()
    {
        return view('livewire.cart.show');
    }

    public function removeFromCart(string $id): void
    {
        $this->cartService->remove($id);
        $this->updateCart();
    }

    public function updateCart()
    {
        $this->total = $this->cartService->total();
        $this->totalQuantity = $this->cartService->totalQuantity();
        $this->content = $this->cartService->content();
    }
}
