<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tasks;
use Validator;
use Carbon\Carbon;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $list_tasks = Tasks::paginate(5);
        $commonData = [
            'list_tasks' => $list_tasks,
        ];
        return view('tasks.tasks', $commonData);
    }

    public function due()
    {
        $list_tasks = Tasks::where('due_date', '=', Carbon::tomorrow())->paginate(5);
        $commonData = [
            'list_tasks' => $list_tasks,
        ];
        return view('tasks.tasks', $commonData);
    }

    public function add(){
        return view('tasks.tasks_add');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $validasi = Validator::make($data, [
            'task' => 'required',
            'priority' => 'required',
            'status' => 'required',
            'start_date' => 'required',
            'due_date' => 'required',
            'notes' => 'required',
        ]);

        if($validasi->fails()){
            return redirect('/tasks/add')
            ->withInput()
            ->withErrors($validasi);
        }

        $tasks = new Tasks();
        $tasks->task = $request->task;
        $tasks->priority = $request->priority;
        $tasks->status = $request->status;
        $tasks->start_date = $request->start_date;
        $tasks->due_date = $request->due_date;
        $tasks->notes = $request->notes;
        $tasks->save();
        return redirect('/tasks');
    }

    public function edit($id)
    {
        $tasks = Tasks::findOrFail($id);
        $commonData = [
            'tasks' => $tasks,
        ];
        return view('tasks.tasks_edit', $commonData);
    }

    public function update($id, Request $request){
        $tasks = Tasks::findOrFail($id);
        $tasks->status = $request->status;
        $tasks->update();
        return redirect('/tasks');
    }
}
