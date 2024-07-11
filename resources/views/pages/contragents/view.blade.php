@extends('layouts.app')
@section('title', 'Изглед на контрагент')

@section('content')
<div class="container-fluid mt-5 pd-5">
    <div class="row container-fluid">
        <div class="col-11 container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Контрагент "{{$contragent->contragent_name}}"
                            <a href="{{ url('crm/pages/contragents/') }}"
                                class="btn btn-primary btn-sm text-white float-end">Назад</a>
                        </h3>
                    </div>
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="contragent_name" class="fw-bold">Име*</label>
                                    <input type="text" name="contragent_name" class="form-control" value="{{ $contragent->contragent_name }}">
                                    @error('contragent_name') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
        
                                <div class="col-md-3 mb-3">
                                    <label for="contragent_company_identifier" class="fw-bold">ЕИК*</label>
                                    <input type="text" name="contragent_company_identifier" class="form-control" value="{{$contragent->contragent_company_identifier}}" readonly>
                                    @error('contragent_company_identifier') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="vat_number">ЗДДС №</label>
                                    <input type="text" name="vat_number" class="form-control" value="{{ old('vat_number', $contragent->vat_number) }}" readonly>
                                    @error('vat_number')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="contragent_contact_person" class="fw-bold">Лице за контакт*</label>
                                    <input name="contragent_contact_person" type="text" class="form-control" value="{{$contragent->contragent_contact_person}}" readonly></input>
                                    @error('contragent_contact_person') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
        
                                <div class="col-md-6 mb-3">
                                    <label for="contragent_phone_number" class="fw-bold">Номер за контакт*</label>
                                    <input name = "contragent_phone_number" type="text" class="form-control" value="{{$contragent->contragent_phone_number}}" readonly>
                                    @error('contragent_phone_number') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="contragent_additional_information">Допълнителна информация</label>
                                    <textarea name="contragent_additional_information" class="form-control" rows="3" readonly>{{$contragent->contragent_additional_information}}</textarea>
                                    @error('contragent_additional_information') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
        
                                <div class="col-md-12 mb-3">
                                    <label for="commission_percentage" class="fw-bold">Процент комисионна*</label>
                                    <input name = "commission_percentage" type="text" class="form-control" value="{{$contragent->commission_percentage}}" readonly>
                                    @error('commission_percentage') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection