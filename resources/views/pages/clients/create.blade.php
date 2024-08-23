@extends('layouts.app')
@section('title', 'Създаване на клиент')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>
                        Добавяне на клиент
                        <a href="{{ url('crm/pages/clients/') }}"
                            class="btn btn-primary btn-sm text-white float-end">Назад</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('crm/pages/clients') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="client" class="fw-bold">Име*</label>
                                <input type="text" name="client" class="form-control" value="{{ old('client') }}">
                                @error('client')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="company_identifier" class="fw-bold">ЕИК*</label>
                                <input type="text" name="company_identifier" class="form-control" value="{{ old('company_identifier') }}">
                                @error('company_identifier')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="vat_number">ЗДДС №</label>
                                <input type="text" name="vat_number" class="form-control" value="{{ old('vat_number') }}">
                                @error('vat_number')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="contact_person" class="fw-bold">Лице за контакт*</label>
                                <input name="contact_person" type="text" class="form-control" value="{{ old('contact_person') }}">
                                @error('contact_person')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="email">Имейл за контакт</label>
                                <input name="email" type="text" class="form-control" value="{{ old('email') }}">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="phone_number" class="fw-bold">Номер за контакт*</label>
                                <input name="phone_number" type="text" class="form-control" value="{{ old('phone_number') }}">
                                @error('phone_number')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="address" class="fw-bold">Адрес*</label>
                                <input name="address" type="text" class="form-control" value="{{ old('address') }}">
                                @error('address')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="contragent_client_id" class="fw-bold"> Контрагент, предоставил контакта*</label>
                                <select name="contragent_client_id" id="contragent_client_id" class="form-control">
                                    <option value="">Изберете контрагент</option>
                                    @foreach ($contragents as $contragent)
                                        <option value="{{ $contragent->id }}" id="contragentName" {{ old('contragent_client_id') == $contragent->id ? 'selected' : '' }}>
                                            {{ $contragent->contragent_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="additional_information">Допълнителна информация</label>
                                <textarea name="additional_information" class="form-control" rows="3">{{ old('additional_information') }}</textarea>
                                @error('additional_information')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="object_first" class="fw-bold">Обект 1*</label>
                                <input name="object_first" type="text" class="form-control" value="{{ old('object_first') }}">
                                @error('object_first')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="adress_object_1">Адрес за обект 1</label>
                                <input name="adress_object_1" type="text" class="form-control" value="{{ old('adress_object_1') }}">
                                @error('adress_object_1')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="object_second">Обект 2</label>
                                <input name="object_second" type="text" class="form-control" value="{{ old('object_second') }}">
                                @error('object_second')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="adress_object_2">Адрес за обект 2</label>
                                <input name="adress_object_2" type="text" class="form-control" value="{{ old('adress_object_2') }}">
                                @error('adress_object_2')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="object_third">Обект 3</label>
                                <input name="object_third" type="text" class="form-control" value="{{ old('object_third') }}">
                                @error('object_third')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="adress_object_3">Адрес за обект 3</label>
                                <input name="adress_object_3" type="text" class="form-control" value="{{ old('adress_object_3') }}">
                                @error('adress_object_3')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="object_fourth">Обект 4</label>
                                <input name="object_fourth" type="text" class="form-control" value="{{ old('object_fourth') }}">
                                @error('object_fourth')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="adress_object_4">Адрес за обект 4</label>
                                <input name="adress_object_4" type="text" class="form-control" value="{{ old('adress_object_4') }}">
                                @error('adress_object_4')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3 mt-3 d-flex align-items-center justify-content-center">
                                <button type="submit" class="btn btn-success text-center">Добави</button>
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
