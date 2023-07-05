<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $category;

    public function mount(Category $category)
    {
        $this->category = $category;
    }

    public function render()
    {
        $products = Product::where('category_id', $this->category->id)->paginate(10);
        return view('livewire.categories.show', compact('products'));
    }
}
