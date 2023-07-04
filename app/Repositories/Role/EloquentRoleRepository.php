<?php

namespace App\Repositories\Role;

use App\Models\Role;
use App\Repositories\AbstractEloquentRepository;

class EloquentRoleRepository extends AbstractEloquentRepository implements RoleRepositoryInterface
{
    public function __construct(Role $model)
    {
        $this->model = $model;
    }

}
