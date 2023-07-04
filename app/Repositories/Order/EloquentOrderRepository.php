<?php

namespace App\Repositories\Order;

use App\Models\Order;
use App\Repositories\AbstractEloquentRepository;

class EloquentOrderRepository extends AbstractEloquentRepository implements OrderRepositoryInterface
{
    public function __construct(Order $model)
    {
        $this->model = $model;
    }

    public function create(array $data)
    {
    }
    public function update(array $data, Order $user)
    {
    }
    public function delete(Order $user)
    {
    }
}
