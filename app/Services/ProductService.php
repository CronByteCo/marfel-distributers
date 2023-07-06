<?php

namespace App\Services;

use App\Repositories\Product\ProductRepositoryInterface;

class ProductService
{
    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function create(array $data)
    {
        return $this->productRepository->create($data);
    }

    public function delete($id)
    {
        $this->productRepository->delete($id);
    }

    public function updateProductByName($name, array $data)
    {
        $this->productRepository->updateProductByName($name, $data);
    }

    public function getAll()
    {
        return $this->productRepository->getAll();
    }

    public function getAllByCategoryName($categoryName)
    {
        return $this->productRepository->getProductsByCategoryName($categoryName);
    }
}
