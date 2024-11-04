<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::where('completed', false)->get();
        // ビューを返す
        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $task = Task::create($validatedData);
        return redirect()->route('tasks.index');
    }

    public function show(Task $task)
    {
        // ビューを返す
        return view('tasks.show', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $validatedData = $request->validate([
            'title' => 'string|max:255',
            'completed' => 'boolean',
        ]);

        $validatedData['completed'] = $request->has('completed') ? true : false;

        $task->update($validatedData);
        return redirect()->route('tasks.index');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index');
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }
} 
