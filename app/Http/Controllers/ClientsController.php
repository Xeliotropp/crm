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
        $newClient = Clients::create($data);

        return redirect('/pages/clients')->with('success', 'Успешно добавяне на нов клиент!');
    }

    public function edit(Clients $client)
    {
        return view('pages.clients.edit', ['client' => $client]);
    }

    public function update(Request $request, $id)
    {
        // $data = $request->validate([
        //     'client' => 'required|string',
        //     'company_identifier' => 'required|integer',
        //     'contact_person' => 'required|string',
        //     'phone_number' => 'required|string',
        //     'address' => 'required|string',
        //     'additional_information' => 'nullable',
        //     'object_first' => 'required|string',
        //     'object_second' => 'nullable|string',
        //     'object_third' => 'nullable|string',
        //     'object_fourth' => 'nullable|string'

        // ]);
        
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



        $client->save();

        return redirect('/pages/clients')->with('success', 'Успешно редактиране на клиент');
    }


}
