<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\AbstractEloquentRepository;
use Illuminate\Support\Facades\Hash;

class EloquentUserRepository extends AbstractEloquentRepository implements UserRepositoryInterface
{
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function create(array $data)
    {
        $this->model->create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['role_id'],
        ]);
    }
    public function updateByUsername($username, array $data)
    {
        $this->model->where('username', $username)->update([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    public function delete($id)
    {
        $this->model->destroy($id);
    }

    public function getUserByUsername($username)
    {
        return $this->model->where('username', $username)->first();
    }

    public function getAll()
    {
        return $this->model->get()->pluck('username');
    }
}
