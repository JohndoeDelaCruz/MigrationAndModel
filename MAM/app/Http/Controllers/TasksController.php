<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // prints the csrf token
        //return response()->json(['csrf_token' => csrf_token()]); 

        $tasks = Tasks::all();
        return view('task', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('taskForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $record = $request->all();
        $tasks = new Tasks;
        $tasks->addTask($record);
        return redirect('/tasks')
            ->with('success', 'successfully inserted record');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $fetchedRecord = Tasks::where('id', $id)->first();
        return view('taskShow', $fetchedRecord->toArray());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $fetchedRecord = Tasks::where('id', $id)->first();
        return view('taskForm', $fetchedRecord->toArray());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tasks $tasksModel, $id)
    {
        $record = $request->all();
        $tasks = new Tasks;
        $tasks->updateTask($id, $record);
        return redirect('/tasks');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tasks $tasksModel)
    {
        /*
        make this method functional
        1. complete the model method (delete a record by ID)
        2. redirect back to /items
        */
        return 'destroy';
    }
}