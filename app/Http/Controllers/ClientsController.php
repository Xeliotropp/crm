<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientsFormRequest;
use App\Models\Clients;

class ClientsController extends Controller
{
    public function index(){
        return view('pages.clients.clients');
    }

    public function create()
    {
        return view('pages.clients.create');
    }

    public function store(ClientsFormRequest $request)
    {
        $validatedData = $request->validated();

        $client = new Clients();

        $client->client = $validatedData['client'];
        $client->company_identifier = $validatedData['company_identifier'];
        $client->contact_person = $validatedData['contact_person'];
        $client->phone_number = $validatedData['phone_number'];
        $client->address = $validatedData['address'];
        $client->additional_information = $validatedData['additional_information'];
        $client->object_first = $validatedData['object_first'];
        $client->object_second = $validatedData['object_second'];
        $client->object_third = $validatedData['object_third'];
        $client->object_fourth = $validatedData['object_fourth'];
    
        $client->save();

        return redirect('/pages/clients')->with('message', 'Успешно добавяне на нов клиент!');
    }

    public function edit(Clients $client)
    {
        return view('pages.clients.edit', compact('client'));
    }

    public function update(ClientsFormRequest $request, $client)
    {
        $validatedData = $request->validated();

        $client = Clients::findOrFail($client);

        $client->client = $validatedData['client'];
        $client->company_identifier = $validatedData['company_identifier'];
        $client->phone_number = $validatedData['phone_number'];
        $client->address = $validatedData['address'];
        $client->additional_information = $validatedData['additional_information'];
        $client->object_first = $validatedData['object_first'];
        $client->object_second = $validatedData['object_second'];
        $client->object_third = $validatedData['object_third'];
        $client->object_fourth = $validatedData['object_fourth'];
        
        $client->update();

        return redirect('admin/Clients')->with('message', 'Успешно обновяване на категория!');
    }

}
