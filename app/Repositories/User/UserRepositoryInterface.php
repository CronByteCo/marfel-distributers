<?php

namespace App\Repositories\User;

use App\Models\User;

interface UserRepositoryInterface
{
    public function all();
    public function find($id);
    public function create(array $data);
    public function updateByUsername($username, array $data);
    public function delete($id);
    public function getUserByUsername($username);
    public function getAll();
}
