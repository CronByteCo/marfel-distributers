<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use App\Models\Role;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\User\UserRepositoryInterface;
use App\Services\UserService;
use Livewire\Component;

class Index extends Component
{
    public function render(CategoryRepositoryInterface $categoryRepository)
    {
        $categories = $categoryRepository->all();
        return view('livewire.categories.index', compact('categories'));
    }
}
