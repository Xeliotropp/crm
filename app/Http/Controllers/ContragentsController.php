<?php

namespace App\Http\Controllers;

use App\Models\Contragents;
use App\Http\Requests\ContragentsFormRequest;
use Illuminate\Http\Request;



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

    public function edit(Contragents $contragent){
        return view('pages.contragents.edit', ['contragent' => $contragent]);
    }
    public function update(Request $request, $id)
    {   
        $contragent = Contragents::find($id);
        
        $contragent->contragent_name = $request->input('contragent_name');
        $contragent->contragent_company_identifier = $request->input('contragent_company_identifier');
        $contragent->contragent_contact_person = $request->input('contragent_contact_person');
        $contragent->contragent_phone_number = $request->input('contragent_phone_number');
        $contragent->contragent_additional_information = $request->input('contragent_additional_information');
        $contragent->commission_percentage = $request->input('commission_percentage');

        $contragent->save();

        return redirect('/pages/contragents')->with('success', 'Успешно редактиране на контрагент');
    }
}
