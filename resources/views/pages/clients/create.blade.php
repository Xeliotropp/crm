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
                            <div id="objectsContainer">
                                <div class="row object-group">
                                    <div class="col-md-6 mb-3">
                                        <label for="objects[0][object]" class="fw-bold">Обект 1*</label>
                                        <input name="objects[0][object]" type="text" class="form-control" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="objects[0][object_address]">Адрес за обект 1</label>
                                        <input name="objects[0][object_address]" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 d-flex align-items-end">
                                    <button type="button" class="btn btn-danger remove-object" style="display: none;">Премахни</button>
                                </div>
                            </div>

                            <div class="col-md-12 mb-5 d-flex align-items-center justify-content-center">
                                <button type="button" id="addObject" class="btn btn-primary">Добави още един обект</button>
                            </div>

                        </div>
                        <div class="col-md-12 mb-3 mt-5 d-flex align-items-center justify-content-center">
                            <button type="submit" class="btn btn-success text-center">Добави</button>
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
        document.addEventListener('DOMContentLoaded', function() {
        const objectsContainer = document.getElementById('objectsContainer');
        const addObjectButton = document.getElementById('addObject');
        let objectCount = 1;

        addObjectButton.addEventListener('click', function() {
            objectCount++;
            const newObjectGroup = document.createElement('div');
            newObjectGroup.className = 'row object-group';
            newObjectGroup.innerHTML = `
                <div class="col-md-6 mb-3">
                    <label for="objects[${objectCount-1}][object]" class="fw-bold">Обект ${objectCount}*</label>
                    <input name="objects[${objectCount-1}][object]" type="text" class="form-control" required>
                </div>
                <div class="col-md-5 mb-3">
                    <label for="objects[${objectCount-1}][object_address]">Адрес за обект ${objectCount}</label>
                    <input name="objects[${objectCount-1}][object_address]" type="text" class="form-control">
                </div>
                <div class="col-md-1 mb-3 d-flex align-items-end">
                    <button type="button" class="btn btn-danger remove-object">Премахни</button>
                </div>
            `;
            objectsContainer.appendChild(newObjectGroup);
        });

        objectsContainer.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-object')) {
                e.target.closest('.object-group').remove();
                updateObjectNumbers();
            }
        });

        function updateObjectNumbers() {
            const objectGroups = objectsContainer.querySelectorAll('.object-group');
            objectGroups.forEach((group, index) => {
                const objectLabel = group.querySelector('label[for^="objects"]');
                const objectInput = group.querySelector('input[name^="objects"][name$="[object]"]');
                const addressLabel = group.querySelector('label[for^="objects"][for$="[object_address]"]');
                const addressInput = group.querySelector('input[name^="objects"][name$="[object_address]"]');

                objectLabel.setAttribute('for', `objects[${index}][object]`);
                objectLabel.textContent = `Обект ${index + 1}*`;
                objectInput.setAttribute('name', `objects[${index}][object]`);

                addressLabel.setAttribute('for', `objects[${index}][object_address]`);
                addressLabel.textContent = `Адрес за обект ${index + 1}`;
                addressInput.setAttribute('name', `objects[${index}][object_address]`);
            });
            objectCount = objectGroups.length;
        }
    });
    </script>
@endpush
