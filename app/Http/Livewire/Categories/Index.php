<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use App\Repositories\Category\CategoryRepositoryInterface;
use Livewire\Component;

class Index extends Component
{
    public function render(CategoryRepositoryInterface $categoryRepository)
    {
        $categories = $categoryRepository->all();
        return view('livewire.categories.index', compact('categories'));
    }
}
