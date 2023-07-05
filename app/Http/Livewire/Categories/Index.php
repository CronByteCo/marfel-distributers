<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use App\Models\Role;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\User\UserRepositoryInterface;
use Livewire\Component;

class Index extends Component
{
    public function render(CategoryRepositoryInterface $categoryRepository, UserRepositoryInterface $userRepository)
    {
        $categories = $categoryRepository->all();
        return view('livewire.categories.index', compact('categories'));
    }
}
