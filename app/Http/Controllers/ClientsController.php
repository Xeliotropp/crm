<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientsFormRequest;
use App\Models\Clients;
use App\Models\Objects;
use App\Models\Contragents;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
        return view('pages.clients.clients');
    }

    public function create()
    {
        $clients = Clients::all();
        $contragents = Contragents::all();
        return view('pages.clients.create', compact('clients', 'contragents'));
    }

    public function store(ClientsFormRequest $request)
    {
        $validatedData = $request->validated();

        $client = new Clients();

        $client = Clients::create([
            'client' => $validatedData['client'],
            'company_identifier' => $validatedData['company_identifier'],
            'vat_number' => $validatedData['vat_number'],
            'contact_person' => $validatedData['contact_person'],
            'email' => $validatedData['email'],
            'phone_number' => $validatedData['phone_number'],
            'address' => $validatedData['address'],
            'contragent_client_id' => $validatedData['contragent_client_id'],
            'additional_information' => $validatedData['additional_information'],
        ]);

        foreach ($validatedData['objects'] as $objectData) {
            $object = Objects::create([
                'object' => $objectData['object'],
                'object_address' => $objectData['object_address'],
            ]);
            $client->objects()->attach($object->id);
        }

        $client->save();

        return redirect('/crm/pages/clients')->with('success', 'Успешно добавяне на нов клиент!');
    }

    public function edit($id)
    {
        $client = Clients::with('objects')->findOrFail($id);
        $contragents = Contragents::all();
        $objects = $client->objects;
        return view('pages.clients.edit', compact('client','contragents', 'objects'));
    }

    public function update(ClientsFormRequest $request, $id)
{
    $validatedData = $request->validated();

    $client = Clients::findOrFail($id);

    // Update client data
    $client->update([
        'client' => $validatedData['client'],
        'company_identifier' => $validatedData['company_identifier'],
        'vat_number' => $validatedData['vat_number'],
        'contact_person' => $validatedData['contact_person'],
        'email' => $validatedData['email'],
        'phone_number' => $validatedData['phone_number'],
        'address' => $validatedData['address'],
        'contragent_client_id' => $validatedData['contragent_client_id'],
        'additional_information' => $validatedData['additional_information'],
    ]);

    // Handle updating of objects
    $client->objects()->detach();  // Detach all related objects

    foreach ($validatedData['objects'] as $objectData) {
        $object = Objects::create([
            'object' => $objectData['object'],
            'object_address' => $objectData['object_address'],
        ]);
        $client->objects()->attach($object->id);
    }

    return redirect('/crm/pages/clients')->with('success', 'Успешно редактиране на клиент');
}

    public function view($id){
        $client = Clients::with('objects')->findOrFail($id);
        $contragents = Contragents::all();
        $objects = $client->objects;
        return view('pages.clients.view', compact('client','contragents', 'objects'));
    }
}
