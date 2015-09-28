<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{

    /**
    * Only authenticated users are given access.
    *
    */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/



    /**
     * Display all tasks.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));

    }



    /**
     * Returns the view for the create form.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }



    /**
     * Creates a new task and saves it to the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = Task::create([
            'name'          => $request['name'],
            'description'   => $request['description'],
            'status'        => 'active'
        ]);

        return redirect('tasks');
    }



    /**
     * Show a specific task.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::where('id', '=', $id)->first();

        return view('tasks.show', compact('task'));
    }



    /**
     * Returns the view for the edit form. Retrieves informaton (original content)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::where('id', '=', $id)->first();

        return view('tasks.edit', compact('task'));
    }



    /**
     * Update a task. Processes the input (post request)
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $task = Task::where('id', '=', $id)->first();

        $task->update($request->all());

        return redirect('tasks');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::where('id', '=', $id)->first();

        $task->delete();

        return redirect('/tasks');
    }


    /**
     * Returns a welcome message.
     *
     */
    public function welcome()
    {
        return 'working on it';
    }



    /**
     * Displays only active tasks.
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function active(Request $request)
    {
        // query to find only active tasks and return multiple rows possibly
        $tasks = Task::where('status', '=', 'active')->get();

        return view('tasks.active', compact('tasks'));
    }



    /**
     * Displays only completed tasks.
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function completed(Request $request)
    {
        // query to find ony completed tasks and return multiple rows possibly
        $tasks = Task::where('status', '=', 'completed')->get();

        return view('tasks.completed', compact('tasks'));
    }



    /**
     * Deletes completed tasks upon hitting the clear command.
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function clear(Request $request)
    {
        $tasks = Task::where('status', '=', 'completed')->get();

        foreach($tasks as $task){
            $task->delete();
        }

        return redirect('/tasks');
    }



    public function about()
    {
        return view('pages.about');
    }


    public function faq()
    {
        return view('pages.faq');
    }


    public function contact()
    {
        return view('pages.contact');
    }
}
