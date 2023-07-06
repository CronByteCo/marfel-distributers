<?php

namespace App\Repositories\Product;

use App\Models\Product;

interface ProductRepositoryInterface
{
    public function allPaginatedByCategory($categoryId);
    public function create(array $data);
    public function getProductByName($name);
    public function updateProductById($id, array $data);
    public function updateProductByName($name, array $data);
    public function delete($id);
    public function getProductsByCategoryName($categoryName);
    public function getAll();
}
