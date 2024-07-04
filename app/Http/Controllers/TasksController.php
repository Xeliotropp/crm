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

        $task->dateOfMeasurement = $validatedData['dateOfMeasurement'];
        $task->mk = $request-> mk == true ? '1' : '0';
        $task->osv = $request-> osv == true ? '1' : '0';
        $task->sh = $request-> sh == true ? '1' : '0';
        $task->vent = $request-> vent == true ? '1' : '0';
        $task->klim = $request-> klim == true ? '1' : '0';
        $task->f0 = $request-> f0 == true ? '1' : '0';
        $task->z = $request-> z == true ? '1' : '0';
        $task->m = $request-> m == true ? '1' : '0';
        $task->izol = $request-> izol == true ? '1' : '0';
        $task->dtz = $request-> dtz == true ? '1' : '0';
        $task->wayOfShowingDocumentation = $validatedData['wayOfShowingDocumentation'];
        $task->certificateNumber = $validatedData['certificateNumber'];
        $task->certificateDate = $validatedData['certificateDate'];
        $task->nextMeasurement = $validatedData['nextMeasurement'];
        $task->mkNext = $request-> mkNext == true ? '1' : '0';
        $task->osvNext = $request-> osvNext == true ? '1' : '0';
        $task->shNext = $request-> shNext == true ? '1' : '0';
        $task->ventNext = $request-> ventNext == true ? '1' : '0';
        $task->klimNext = $request-> klimNext == true ? '1' : '0';
        $task->f0Next = $request-> f0Next == true ? '1' : '0';
        $task->zNext = $request-> zNext == true ? '1' : '0';
        $task->mNext = $request-> mNext == true ? '1' : '0';
        $task->izolNext = $request-> izolNext == true ? '1' : '0';
        $task->dtzNext = $request-> dtzNext == true ? '1' : '0';
        $task->invoice = $validatedData['invoice'];
        $task->payment_method = $validatedData['payment_method'];
        $task->invoice_date = $validatedData['invoice_date'];
        $task->price_without_vat = $validatedData['price_without_vat'];
        $task->paid = $request-> paid == true ? '1' : '0';
        $task->contragent_sum = $validatedData['contragent_sum'];
        $task->total_sum = $validatedData['total_sum'];
        $task->client = $validatedData['client'];
        $task->client_address_1 = $validatedData['client_address_1'];
        $task->client_address_2 = $validatedData['client_address_2'];
        $task->client_address_3 = $validatedData['client_address_3'];
        $task->client_address_4 = $validatedData['client_address_4'];
        $task->contragent = $validatedData['contragent'];

        $task->save(); 
        return redirect(route('pages.tasks.index'))->with('success', 'Успешно създадена задача');
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
        ]);
    }
}
