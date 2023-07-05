<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Services\UserService;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_authentication()
    {
        $userService = resolve(UserService::class);
        $this->assertTrue($userService->authenticate('jcasper', 'password'));
    }
}
