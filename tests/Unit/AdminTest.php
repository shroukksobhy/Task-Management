<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Database\Seeders\AdminsTableSeeder;
use Tests\TestCase;

class AdminTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->seed(AdminsTableSeeder::class);
        $this->assertTrue(true);
    }
}
