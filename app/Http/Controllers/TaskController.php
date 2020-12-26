<?php

namespace App\Http\Controllers;


use App\Models\Task;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tasks = Task::where('status', 'completed')->get();        
        return view('tasks.tasks', compact('tasks'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $locations = Location::orderBy('created_at', 'desc')->get();
        return view('tasks.create', compact('locations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        request()->validate([

            'task_name' => ['required']
        ]);
        $status = 'pending';
        $task = new Task();
        $task->task_name = request('task_name');
        $task->location_id = request('location_id');
        $task->status =  $status;

        $task->save();
        return redirect('tasks/create')->with('message', 'Task added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
        $taskLocations = Task::where('location_id', $id)->get();        
        return view('tasks.show', compact('taskLocations'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        //
        $username = Auth::user()->name;
        // $dt = new DateTime();
        // $updated_at = date("h:i A",strtotime(date) + 21600);
        $tasks = Task::find($id);
       
        // $new2date = strtotime("h:i A",($date) + 21600));
       
        $status = 'completed';
        $tasks->completed_by = $username;
        $tasks->status = $status;
        // $tasks->completed_date = $date;
        $tasks->save();
        return redirect('/tasks');


        // return view('tasks.show', compact('id'));
       //  return redirect('tasks', compact('id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {                             
        //
        dd('test');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
        
        $task->delete();
        return redirect('/tasks');
    }

    public function reports() {
        
        $tasks = Task::where('status', 'completed')->get();        
        return view('reports', compact('tasks'));

    }
}
