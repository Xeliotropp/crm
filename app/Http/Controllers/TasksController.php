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
        $validatedData = $request->validated();
        $task = Tasks::create($validatedData);
        
        return redirect()->route('pages.tasks.index')->with('success', 'Task created successfully');
    }

    public function getClientData($id)
    {
        $client = Clients::findOrFail($id);
        return response()->json([
            'object_first' => $client->object_first,
            'object_second' => $client->object_second,
            'object_third' => $client->object_third,
            'object_fourth' => $client->object_fourth,
            'contragent_id' => $client->contragent_id,
        ]);
    }

    public function getContragentData($id)
    {
        $contragent = Contragents::findOrFail($id);
        return response()->json([
            'commission_percentage' => $contragent->commission_percentage,
            // You can include other fields here if needed
        ]);
    }
}
