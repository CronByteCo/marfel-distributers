<?php

namespace App\Repositories\Category;

use App\Models\Category;
use App\Repositories\AbstractEloquentRepository;

class EloquentCategoryRepository extends AbstractEloquentRepository implements CategoryRepositoryInterface
{
    public function __construct(Category $model)
    {
        $this->model = $model;
    }
}
