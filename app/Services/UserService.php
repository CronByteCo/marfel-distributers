<?php

namespace App\Services;

use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getUserByUsername($username)
    {
        return $this->userRepository->getUserByUsername($username);
    }

    public function deleteById($id)
    {
        $this->userRepository->delete($id);
    }

    public function create(array $data)
    {
        return $this->userRepository->create($data);
    }

    public function updateByUsername($username, array $data)
    {
        return $this->userRepository->updateByUsername($username, $data);
    }

    public function authenticate($credentials)
    {
        if (Auth::attempt($credentials)) {
            return true;
        }

        throw new AuthenticationException();
    }

    public function getAllUsers()
    {
        return $this->userRepository->getAll();
    }
}
