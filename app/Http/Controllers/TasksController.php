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

        $task = new Tasks();

        $task->client = $validatedData["client"];
        $task->client_address_1 = $validatedData["client_address_1"];
        $task->client_address_2 = $validatedData["client_address_2"];
        $task->client_address_3 = $validatedData["client_address_3"];
        $task->client_address_4 = $validatedData["client_address_4"];

        $task->contragent = $validatedData["contragent"];
        $task->dateOfMeasurment = $validatedData["dateOfMeasurment"];

        $task->mk = $validatedData["mk"];
        $task->osv = $validatedData["osv"];
        $task->sh = $validatedData["sh"];
        $task->vent = $validatedData["vent"];
        $task->klim = $validatedData["klim"];
        $task->f0 = $validatedData["f0"];
        $task->z = $validatedData["z"];
        $task->m = $validatedData["m"];
        $task->izol = $validatedData["izol"];
        $task->dtz = $validatedData["dtz"];

        $task->wayOfShowingDocumentation = $validatedData["wayOfShowingDocumentation"];
        $task->certificateNumber = $validatedData["certificateNumber"];
        $task->certificateDate = $validatedData["certificateDate"];

        $task->nextMeasurment = $validatedData["nextMeasurment"];
        $task->mkNext = $validatedData["mkNext"];
        $task->osvNext = $validatedData["osvNext"];
        $task->ventNext = $validatedData["ventNext"];
        $task->klimNext = $validatedData["klimNext"];
        $task->f0Next = $validatedData["f0Next"];
        $task->zNext = $validatedData["zNext"];
        $task->mNext = $validatedData["mNext"];
        $task->izolNext = $validatedData["izolNext"];
        $task->dtzNext = $validatedData["dtzNext"];
        $task->dtNext = $validatedData["dtNext"];

        $task->invoice = $validatedData["invoice"];
        $task->payment_method = $validatedData["payment_method"];
        $task->invoice_date = $validatedData["invoice_date"];
        $task->price_without_vat = $validatedData["price_without_vat"];
        $task->paid = $validatedData["paid"];
        $task->contragent_sum = $validatedData["contragent_sum"];
        $task->total_sum = $validatedData["total_sum"];

        $task->save();

        return redirect('/pages/tasks')->with('success','Успешно създадена задача!');
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
}
