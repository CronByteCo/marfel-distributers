<?php

namespace App\Repositories\Product;

use App\Models\Product;

interface ProductRepositoryInterface
{
    public function all();
    public function allPaginatedByCategory($categoryId);
}
