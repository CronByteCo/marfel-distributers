<?php

namespace App\Repositories\Distributor;

use App\Models\Distributor;
use App\Repositories\AbstractEloquentRepository;

class EloquentDistributorRepository extends AbstractEloquentRepository implements DistributorRepositoryInterface
{
    public function __construct(Distributor $model)
    {
        $this->model = $model;
    }
}
