<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use App\Models\Task;
use Tests\TestCase;

class TaskTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {

        $task = Task::create([
        "title" => "title UNITTEST",
        "description" => "description UNIT TEST",
        "assigned_to" => "1",
        "assigned_by" => "1"]);
        $this->assertTrue(isset($task));
    }
}
