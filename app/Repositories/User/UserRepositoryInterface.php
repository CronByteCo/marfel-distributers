<?php

namespace App\Repositories\User;

use App\Models\User;

interface UserRepositoryInterface
{
    public function all();
    public function find($id);
    public function create(array $data);
    public function update(array $data, User $user);
    public function delete(User $user);
}
