<?php

namespace Tests\Unit;

use Database\Seeders\UsersSeeder;
// use PHPUnit\Framework\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    use RefreshDatabase;

    public function test_example()
    {
        $this->seed(UsersSeeder::class);
        $this->assertTrue(true);
    }
}
