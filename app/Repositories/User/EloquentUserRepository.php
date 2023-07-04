<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\AbstractEloquentRepository;

class EloquentUserRepository extends AbstractEloquentRepository implements UserRepositoryInterface
{
    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function create(array $data)
    {
    }
    public function update(array $data, User $user)
    {
    }
    public function delete(User $user)
    {
    }
}
