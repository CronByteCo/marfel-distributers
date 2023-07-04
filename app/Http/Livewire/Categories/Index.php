<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $categories = Category::all();
        return view('livewire.categories.index', compact('categories'));
    }
}
