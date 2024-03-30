<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\Task;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::paginate(15);

        return view('taskslist', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $admins = Admin::all();
        $users = User::all();
        return view('form', ['admins' => $admins,'users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $newTask = new Task();
        $newTask->title = $request->title;
        $newTask->description = $request->description;
        $newTask->assigned_to = $request->assigned_to;
        $newTask->assigned_by = $request->assigned_by;
        $newTask->save();
        return redirect('/tasks');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function statistics()
    {
        $tasks = Task::all();
        $users = User::all();
        $grouped_by = $tasks->groupBy('assigned_to')->map->count();
        // return $grouped_by;

        $topUsers = User::withCount('task as task_counts')
                 ->orderBy('task_counts', 'desc')
                 ->take(10)
                 ->get('task_counts');
        return view('statistics', ['tasks' => $tasks,'users' => $users,'topUsers' => $topUsers]);


    }
}
