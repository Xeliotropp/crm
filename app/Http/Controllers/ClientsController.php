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

        return redirect('/pages/clients')->with('success', 'Успешно добавяне на нов клиент!');
    }

    public function edit(Clients $client)
    {
        return view('pages.clients.edit', ['client' => $client]);
    }

    public function update(Request $request, Clients $client)
    {
        $data = $request->validate([
            'client' => 'required|string',
            'company_identifier' => 'required|integer',
            'contact_person' => 'required|string',
            'phone_number' => 'required|string',
            'address' => 'required|string',
            'additional_information' => 'nullable',
            'object_first' => 'required|string',
            'object_second' => 'nullable|string',
            'object_third' => 'nullable|string',
            'object_fourth' => 'nullable|string'

        ]);
        $client->update($data);

        return redirect(route('clients.index'))->with('success', 'Успешно редактиране на клиент');
    }


}
