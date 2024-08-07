@extends('layouts.app')
@section('title', 'Редактиране на клиент')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Редактиране на клиент
                            <a href="{{ url('crm/pages/clients') }}" class="btn btn-primary btn-sm text-white float-end">Назад</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="/crm/pages/clients/{{$client->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="client" class="fw-bold">Име*</label>
                                    <input type="text" name="client" value="{{ old('client', $client->client) }}" class="form-control" id="client">
                                    @error('client')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="company_identifier" class="fw-bold">ЕИК*</label>
                                    <input type="text" name="company_identifier" value="{{ old('company_identifier', $client->company_identifier) }}" class="form-control" id="company_identifier">
                                    @error('company_identifier')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="vat_number">ЗДДС №</label>
                                    <input type="text" name="vat_number" class="form-control" value="{{ old('vat_number', $client->vat_number) }}">
                                    @error('vat_number')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="contact_person" class="fw-bold">Лице за контакт*</label>
                                    <input name="contact_person" type="text" class="form-control" value="{{ old('contact_person', $client->contact_person) }}">
                                    @error('contact_person')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phone_number" class="fw-bold">Номер за контакт*</label>
                                    <input name="phone_number" type="text" class="form-control" value="{{ old('phone_number', $client->phone_number) }}">
                                    @error('phone_number')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="address" class="fw-bold">Адрес*</label>
                                    <input name="address" type="text" class="form-control" value="{{ old('address', $client->address) }}">
                                    @error('address')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="additional_information">Допълнителна информация</label>
                                    <textarea name="additional_information" class="form-control" rows="3">{{ old('additional_information', $client->additional_information) }}</textarea>
                                    @error('additional_information')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="object_first" class="fw-bold">Обект 1*</label>
                                    <input name="object_first" type="text" class="form-control" value="{{ old('object_first', $client->object_first) }}">
                                    @error('object_first')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="adress_object_1">Адрес за обект 1</label>
                                    <input name = "adress_object_1" type="text" class="form-control" value="{{ old('adress_object_1', $client->adress_object_1) }}">
                                    @error('adress_object_1')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <a class="btn btn-secondary" id="hide">Редактиране на допълните адреси</a>
                                <div class="row" id="addresses" style="display: none">
                                    <div class="col-md-6 mb-3">
                                        <label for="object_second">Обект 2</label>
                                        <input name = "object_second" type="text" class="form-control" value="{{ old('object_first', $client->object_second) }}">
                                        @error('object_second')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
    
                                    <div class="col-md-6 mb-3">
                                        <label for="adress_object_2">Адрес за обект 2</label>
                                        <input name = "adress_object_2" type="text" class="form-control" value="{{ old('adress_object_2', $client->adress_object_2) }}">
                                        @error('adress_object_2')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
    
                                    <div class="col-md-6 mb-3">
                                        <label for="object_third">Обект 3</label>
                                        <input name = "object_third" type="text" class="form-control" value="{{ old('object_first', $client->object_third) }}">
                                        @error('object_third')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
    
                                    <div class="col-md-6 mb-3">
                                        <label for="adress_object_3">Адрес за обект 3</label>
                                        <input name = "adress_object_3" type="text" class="form-control" value="{{ old('adress_object_1', $client->adress_object_3) }}">
                                        @error('adress_object_3')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
    
                                    <div class="col-md-6 mb-3">
                                        <label for="object_fourth">Обект 4</label>
                                        <input name = "object_fourth" type="text" class="form-control" value="{{ old('object_first', $client->object_fourth) }}">
                                        @error('object_fourth')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="adress_object_4">Адрес за обект 4</label>
                                        <input name = "adress_object_4" type="text" class="form-control" value="{{ old('adress_object_1', $client->adress_object_4) }}">
                                        @error('adress_object_4')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <button type="submit" class="btn btn-primary float-end">Запази</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        const hider = document.getElementById('hide');
        const addresses = document.getElementById('addresses');

        hider.addEventListener("click", e =>{
            addresses.style.display = "inherit";
        });
    </script>
@endpush