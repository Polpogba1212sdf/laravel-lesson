<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TaskRepository;
use Illuminate\Http\Response;
use App\Task;
use App\Subtask;

class TaskController extends Controller
{
    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');
        $this->tasks = $tasks;
    }
    
    /**
     * View all tasks.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        return view('tasks.index', [
            'tasks' => $this->tasks->forUser($request->user()),
        ]);
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'required',
        ]);
        
        $request->user()->tasks()->create([
            'name' => $request->name,
            'description' => $request->description,
            'end' => $request->end,
        ]);
        
        
        return redirect('/tasks');
    }
    
    public function createSubTask(Task $task,Request $request)
    {
        return view('tasks.subTaskCreate', [
            'task' => $task,
        ]);
    }
    
    public function storeSubTask(Task $task, Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'required',
        ]);
        
        $task->subtasks()->create([
            'name' => $request->name,
            'description' => $request->description
        ]);
      
        return redirect('/tasks');
    }
    
    public function ajax(Task $task, Request $request)
    {
        
    }
}
