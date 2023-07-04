<?php

namespace App\Repositories\Category;

interface CategoryRepositoryInterface
{
    public function all();
    public function find($id);
}
