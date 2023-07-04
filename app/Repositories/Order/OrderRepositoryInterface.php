<?php

namespace App\Repositories\Order;

use App\Models\Order;

interface OrderRepositoryInterface
{
    public function all();
    public function find($id);
    public function create(array $data);
    public function update(array $data, Order $user);
    public function delete(Order $user);
}
