@extends('layouts.app')
@section('title', 'Редактиране на контрагент')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Добавяне на контрагент
                            <a href="{{ url('pages/contragents/') }}"
                                class="btn btn-primary btn-sm text-white float-end">Назад</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="/pages/contragents/{{$contragent->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="contragent_name" class="fw-bold">Име*</label>
                                    <input type="text" name="contragent_name" class="form-control" value="{{ $contragent->contragent_name }}">
                                    @error('contragent_name') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
        
                                <div class="col-md-6 mb-3">
                                    <label for="contragent_company_identifier" class="fw-bold">ЕИК/ПИК/БУЛСТАТ*</label>
                                    <input type="text" name="contragent_company_identifier" class="form-control" value="{{$contragent->contragent_company_identifier}}">
                                    @error('contragent_company_identifier') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
        
                                <div class="col-md-6 mb-3">
                                    <label for="contragent_contact_person" class="fw-bold">Лице за контакт*</label>
                                    <input name="contragent_contact_person" type="text" class="form-control" value="{{$contragent->contragent_contact_person}}"></input>
                                    @error('contragent_contact_person') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
        
                                <div class="col-md-6 mb-3">
                                    <label for="contragent_phone_number" class="fw-bold">Номер за контакт*</label>
                                    <input name = "contragent_phone_number" type="text" class="form-control" value="{{$contragent->contragent_phone_number}}">
                                    @error('contragent_phone_number') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="contragent_additional_information">Допълнителна информация</label>
                                    <textarea name="contragent_additional_information" class="form-control" rows="3">{{$contragent->contragent_additional_information}}</textarea>
                                    @error('contragent_additional_information') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
        
                                <div class="col-md-12 mb-3">
                                    <label for="commission_percentage" class="fw-bold">Процент комисионна*</label>
                                    <input name = "commission_percentage" type="text" class="form-control" value="{{$contragent->commission_percentage}}">
                                    @error('commission_percentage') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
        
                                <div class="col-md-12 mb-3">
                                    <button type="submit" class="btn btn-success float-end">Добави</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection