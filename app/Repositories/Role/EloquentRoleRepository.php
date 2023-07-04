<?php

namespace App\Repositories\Role;

use App\Models\Role;
use App\Repositories\AbstractEloquentRepository;

class EloquentRoleRepository extends AbstractEloquentRepository implements RoleRepositoryInterface
{
    protected $model;

    public function __construct(Role $model)
    {
        $this->model = $model;
    }

}
