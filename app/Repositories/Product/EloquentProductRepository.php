<?php

namespace App\Repositories\Product;

use App\Models\Product;
use App\Repositories\AbstractEloquentRepository;

class EloquentProductRepository extends AbstractEloquentRepository implements ProductRepositoryInterface
{
    protected $model;

    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    public function create(array $data)
    {
    }
    public function update(array $data, Product $user)
    {
    }
    public function delete(Product $user)
    {
    }
}
