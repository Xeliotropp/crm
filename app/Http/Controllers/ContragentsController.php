<?php

namespace App\Http\Controllers;

use App\Models\Contragents;
use App\Http\Requests\ContragentsFormRequest;


class ContragentsController extends Controller
{
    public function index(){
        return view('pages.contragents.contragents');
    }

    public function create()
    {
        return view('pages.contragents.create');
    }

    public function store(ContragentsFormRequest $request)
    {
        $validatedData = $request->validated();

        $contragent = new Contragents();

        $contragent->contragent_name = $validatedData['contragent_name'];
        $contragent->contragent_company_identifier = $validatedData['contragent_company_identifier'];
        $contragent->contragent_contact_person = $validatedData['contragent_contact_person'];
        $contragent->contragent_phone_number = $validatedData['contragent_phone_number'];
        $contragent->contragent_additional_information = $validatedData['contragent_additional_information'];
        $contragent->commission_percentage = $validatedData['commission_percentage'];
    
        $contragent->save();

        return redirect('/pages/contragents')->with('success', 'Успешно добавяне на нов контрагент!');
    }
}
