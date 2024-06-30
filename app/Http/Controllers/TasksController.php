<?php

namespace App\Http\Controllers;

use App\Http\Requests\TasksFormRequest;
use App\Models\Clients;
use App\Models\Contragents;
use App\Models\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(){
        return view("pages.tasks.index");
    }
    public function create(){
        $clients = Clients::all();
        $contragents = Contragents::all();
        return view("pages.tasks.create", compact("clients", "contragents"));
    }
    public function store(TasksFormRequest $request){
        $task = new Tasks();
        $task->fill($request->all());
        $task->save();
    }
}
