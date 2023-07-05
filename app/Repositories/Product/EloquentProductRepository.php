<?php

namespace App\Repositories\Product;

use App\Models\Product;
use App\Repositories\AbstractEloquentRepository;

class EloquentProductRepository extends AbstractEloquentRepository implements ProductRepositoryInterface
{
    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    public function allPaginatedByCategory($categoryId)
    {
        return Product::where('category_id', $categoryId)->paginate(10);
    }
}
