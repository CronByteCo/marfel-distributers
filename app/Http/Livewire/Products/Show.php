<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use App\Services\CartService;
use Livewire\Component;

class Show extends Component
{
    public $product;
    public $quantity;

    public function mount(Product $product)
    {
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.products.show');
    }

    public function rules()
    {
        return [
            'quantity' => ['required', 'numeric', 'min:1'],
        ];
    }

    public function updated($propertyName, $value)
    {
        $this->resetValidation($propertyName);

        $this->validateOnly($propertyName);
    }


    public function addToCart(CartService $cartService): void
    {
        $this->validate();

        $cartService->add($this->product->id, $this->product->name, $this->product->price, $this->quantity);
        $this->emitTo('cart.show','productAddedToCart');

        $this->resetExcept('product');
        
        $this->dispatchBrowserEvent('swal', [
            'icon' => 'success',
            'title' => 'Success!',
            // 'text' => 'Select at least one checkbox. Please try again.',
        ]);
    }
}
