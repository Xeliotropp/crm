<?php

namespace App\Http\Controllers;

use App\Http\Requests\TasksFormRequest;
use App\Models\Clients;
use App\Models\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(){
        $tasks = Tasks::orderBy("created_at","desc")->paginate(10);
    }
    public function create(){
        $clients = Clients::all();
        return view("pages.tasks.create", compact("clients"));
    }
    public function store(TasksFormRequest $request){
        $task = new Tasks();
        $task->fill($request->all());
        $task->save();
    }
}
