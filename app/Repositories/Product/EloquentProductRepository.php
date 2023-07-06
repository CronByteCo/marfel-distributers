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

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function getProductByName($name)
    {
        return $this->model->where('name', $name)->first();
    }

    public function updateProductById($id, array $data)
    {
        return $this->model->where('id', $id)->update($data);
    }

    public function updateProductByName($name, array $data)
    {
        return $this->model->where('name', $name)->update($data);
    }

    public function delete($id)
    {
        $this->model->destroy($id);
    }

    public function getProductsByCategoryName($categoryName)
    {
        return $this->model->with('category')
            ->whereHas('category', function ($builder) use ($categoryName) {
                $builder->where('name', $categoryName);
            })
            ->get();
    }

    public function getAll()
    {
        return $this->model->with('category')->get();
    }
}
