<?php

namespace App\Repositories\Category;

use App\Models\Category;
use App\Repositories\AbstractEloquentRepository;

class EloquentCategoryRepository extends AbstractEloquentRepository implements CategoryRepositoryInterface
{
    protected $model;

    public function __construct(Category $model)
    {
        $this->model = $model;
    }
}
