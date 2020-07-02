<?php

namespace App\Http\Controllers;

use App\Task;
use App\TaskPriority;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tasks = Task::latest()->get();

        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function create()
    {
        return view('tasks.create', ['priorities' => TaskPriority::all()]);
    }

    public function store()
    {
        $this->validateTask();

        $task = new Task(request(['title', 'description']));
        $task->user_id = request()->user()->id;
        $task->status = false;
        $task->save();
        $task->task_priorities()->attach(request('task_priorities'));

        return redirect(route('app.dashboard'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }

    protected function validateTask()
    {
        return request()->validate([
            'title' => ['required', 'min:5', 'max:255'],
            'description' => 'required',
            'priorities' => 'exists:priorities,id'
        ]);
    }
}
