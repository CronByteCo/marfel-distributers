<?php

namespace App\Repositories\Product;

use App\Models\Product;

interface ProductRepositoryInterface
{
    public function all();
    public function find($id);
    public function create(array $data);
    public function update(array $data, Product $user);
    public function delete(Product $user);
}
