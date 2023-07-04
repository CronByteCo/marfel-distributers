<?php

namespace App\Repositories\Distributor;

interface DistributorRepositoryInterface
{
    public function all();
    public function find($id);
}
