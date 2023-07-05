<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use App\Models\Product;
use App\Repositories\Product\ProductRepositoryInterface;
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

    public function render(ProductRepositoryInterface $productRepository)
    {
        $products = $productRepository->allPaginatedByCategory($this->category->id);
        return view('livewire.categories.show', compact('products'));
    }
}
