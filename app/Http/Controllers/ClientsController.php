<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientsFormRequest;
use App\Models\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
        return view('pages.clients.clients');
    }

    public function create()
    {
        return view('pages.clients.create');
    }

    public function store(ClientsFormRequest $request)
    {
        $data = $request->validated();
        $newClient = Clients::create($data);

        return redirect('/pages/clients')->with('success', 'Успешно добавяне на нов клиент!');
    }

    public function edit(Clients $client)
    {
        return view('pages.clients.edit', ['client' => $client]);
    }

    public function update(Request $request, $id)
    {   
        $client = Clients::find($id);
        
        $client->client = $request->input('client');
        $client->company_identifier = $request->input('company_identifier');
        $client->contact_person = $request->input('contact_person');
        $client->phone_number = $request->input('phone_number');
        $client->address = $request->input('address');
        $client->additional_information = $request->input('additional_information');
        $client->object_first = $request->input('object_first');
        $client->object_second = $request->input('object_second');
        $client->object_third = $request->input('object_third');
        $client->object_fourth = $request->input('object_fourth');
        $client->adress_object_1 = $request->input('adress_object_1');
        $client->adress_object_2 = $request->input('adress_object_2');
        $client->adress_object_3 = $request->input('adress_object_3');
        $client->adress_object_4 = $request->input('adress_object_4');

        $client->save();

        return redirect('/pages/clients')->with('success', 'Успешно редактиране на клиент');
    }


}
