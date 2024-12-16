<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::paginate(4);
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Task::create($request->all());

        return redirect()->route('tasks.index')-> with('success', 'Task created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('tasks.show', compact('task')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $request->validate([ 
            'title' => 'required', 
            'description' => 'required', 
        ]); 
 
        $task->update($request->all()); 
 
        return redirect()->route('tasks.index')->with('success', 'Task updated successfully!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!'); 
    }

    public function toggleStatus($id) {
        // Tìm task dựa vào id
        $task = Task::findOrFail($id);
    
        // Chuyển đổi trạng thái "hoàn thành" -> "chưa hoàn thành" và ngược lại
        $task->completed = !$task->completed;
    
        // Lưu thay đổi
        $task->save();
    
        // Chuyển hướng về trang chi tiết task
        return redirect()->route('tasks.show', $task->id);
    }
    
}
