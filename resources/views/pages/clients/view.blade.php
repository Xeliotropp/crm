@extends('layouts.app')
@section('title', 'Изглед на клиент')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>
                            Клиент "{{ $client->client }}"
                            <a href="{{ url('crm/pages/clients') }}"
                                class="btn btn-primary btn-sm text-white float-end">Назад</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="client" class="fw-bold">Име</label>
                                <input type="text" name="client" class="form-control" value="{{ old('client', $client->client) }}" readonly>
                                @error('client')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="company_identifier" class="fw-bold">ЕИК</label>
                                <input type="text" name="company_identifier" class="form-control" value="{{ old('company_identifier', $client->company_identifier) }}" readonly>
                                @error('company_identifier')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="vat_number" class="fw-bold">ЗДДС №</label>
                                <input type="text" name="vat_number" class="form-control" value="{{ old('vat_number', $client->vat_number) }}" readonly>
                                @error('vat_number')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="contact_person" class="fw-bold">Лице за контакт</label>
                                <input name="contact_person" type="text" class="form-control" value="{{ old('contact_person', $client->contact_person) }}" readonly>
                                @error('contact_person')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="email" class="fw-bold">Имейл за контакт</label>
                                <input name="email" type="text" class="form-control" value="{{ old('email', $client->email) }}" readonly>
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="phone_number" class="fw-bold">Номер за контакт</label>
                                <input name="phone_number" type="text" class="form-control" value="{{ old('phone_number', $client->phone_number) }}" readonly>
                                @error('phone_number')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="address" class="fw-bold">Адрес</label>
                                <input name="address" type="text" class="form-control" value="{{ old('address', $client->address) }}" readonly>
                                @error('address')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="contragent_client_id" class="fw-bold">Контрагент</label>
                                <input value="{{old('contragent', $client->contragents->contragent_name)}}" class="form-control" readonly>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="additional_information" class="fw-bold">Допълнителна информация</label>
                                <textarea name="additional_information" class="form-control" rows="3" readonly>{{ old('additional_information', $client->additional_information) }}</textarea>
                                @error('additional_information')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div id="objectsContainer">
                                @foreach ($objects as $index => $object)
                                    <div class="row object-group">
                                        <div class="col-md-6 mb-3">
                                            <label for="objects[{{ $index }}][object]" class="fw-bold">Обект {{ $index + 1 }}</label>
                                            <input name="objects[{{ $index }}][object]" type="text" class="form-control" value="{{ old('objects.' . $index . '.object', $object->object) }}" readonly>
                                        </div>
                                        <div class="col-md-5 mb-3">
                                            <label for="objects[{{ $index }}][object_address]" class="fw-bold">Адрес за обект {{ $index + 1 }}</label>
                                            <input name="objects[{{ $index }}][object_address]" type="text" class="form-control" value="{{ old('objects.' . $index . '.object_address', $object->object_address) }}" readonly>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
