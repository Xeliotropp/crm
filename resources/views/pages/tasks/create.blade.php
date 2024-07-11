@extends('layouts.app')
@section('title', 'Създаване на задача')

@section('content')
<div class="container-fluid mt-5 pd-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Създаване на задача</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('pages.tasks.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex">
                            <div class="col-md-5 mx-5">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="client" class="fw-bold">Клиент*</label>
                                        <select id="client" name="client_id" class="form-control" onchange="fetchClientData()">
                                            <option value="">Избери клиент</option>
                                            @foreach ($clients as $client)
                                                <option value="{{ $client->id }}" id="clientName">{{ $client->client }}</option>
                                            @endforeach
                                        </select>
                                        @error('client')
                                            <small id="clientError" class="text-danger"></small>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="client_address_1" class="fw-bold">Избор на обект*</label>
                                        <select name="client_address_1" id="client_address_1" class="form-control">
                                            <option value="">Изберете обект</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex gap-5">
                                    <div class="mb-3 pe-5">
                                        <label for="certificateDate" class="fw-bold">Дата на измерване*</label>
                                        <input id="dateOfMeasurement" name="dateOfMeasurement" type="date" class="form-control">
                                        @error('certificiteDate')
                                            <small id="certificateDateError" class="text-danger"></small>
                                        @enderror
                                    </div>
                                    <div class="ms-5 ps-5">
                                        <label>Параметри на измерването</label><br>
                                        <label for="mk">МК</label>
                                        <input id="mk" name="mk" type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="osv">ОСВ</label>
                                        <input id="osv" name="osv" type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="sh">Ш</label>
                                        <input id="sh" name="sh" type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="vent">Вент</label>
                                        <input id="vent" name="vent" type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="klim">Клим</label>
                                        <input id="klim" name="klim" type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <div></div>
                                        <label for="f0">F-0</label>
                                        <input id="f0" name="f0" type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="z">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Z</label>
                                        <input id="z" name="z" type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="m">M</label>
                                        <input id="m" name="m" type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="izol">Изол</label>
                                        <input id="izol" name="izol" type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="dtz">&nbsp;&nbsp;ДТЗ</label>
                                        <input id="dtz" name="dtz" type="checkbox">&nbsp;
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="wayOfShowingDocumentation" class="fw-bold">Начин на предоставяне на документация</label>
                                    <input type="text" id="wayOfShowingDocumentation" name="wayOfShowingDocumentation" class="form-control" rows="3">
                                    <small id="wayOfShowingDocumentationError" class="text-danger"></small>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="certificateNumber" class="fw-bold">Номер на сертификат*</label>
                                        <input id="certificateNumber" name="certificateNumber" type="text" class="form-control">
                                        <small id="certificateNumberError" class="text-danger"></small>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="certificateDate" class="fw-bold">Дата на сертификат*</label>
                                        <input id="certificateDate" name="certificateDate" type="date" class="form-control">
                                        <small id="certificateDateError" class="text-danger"></small>
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <br>
                                <p class="fw-bold text-center">Следващо измерване</p>
                                <div class="h-25 d-flex gap-5">
                                    <div class="mb-3 pe-5">
                                        <label for="nextMeasurement" class="fw-bold">Дата на следващо измерване*</label>
                                        <input id="nextMeasurementDate" name="nextMeasurement" type="date" class="form-control">
                                        <small id="nextMeasurementDateError" class="text-danger"></small>
                                    </div>
                                    <div class="ms-5 ps-5">
                                        <label>Параметри на следващото измерване</label><br>
                                        <label for="mkNext">МК</label>
                                        <input id="mkNext" name="mkNext" type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="osvNext">ОСВ</label>
                                        <input id="osvNext" name="osvNext" type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="shNext">Ш</label>
                                        <input id="shNext" name="shNext" type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="ventNext">Вент</label>
                                        <input id="ventNext" name="ventNext" type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="klimNext">Клим</label>
                                        <input id="klimNext" name="klimNext" type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <div></div>
                                        <label for="f0Next">F-0</label>
                                        <input id="f0Next" name="f0Next" type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="zNext">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Z</label>
                                        <input id="zNext" name="zNext" type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="mNext">M</label>
                                        <input id="mNext" name="mNext" type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="izolNext">Изол</label>
                                        <input id="izolNext" name="izolNext" type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="dtzNext">&nbsp;&nbsp;ДТЗ</label>
                                        <input id="dtzNext" name="dtzNext" type="checkbox">&nbsp;
                                    </div>
                                </div>
                            </div>
                            <!-- vertical line-->
                            <div class="vr mx-5">&nbsp;</div>
                            <!-- vertical line-->
                            <div class="col-md-5 mx-5">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="invoice" class="fw-bold">Номер на фактура*</label>
                                        <input type="text" id="invoice" name="invoice" class="form-control">
                                        <small id="invoiceError" class="text-danger"></small>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="invoice_date" class="fw-bold">Дата на фактура*</label>
                                        <input type="date" id="invoice_date" name="invoice_date" class="form-control">
                                        <small id="invoice_dateError" class="text-danger"></small>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="payment_method" class="fw-bold">Начин на плащане*</label>
                                        <select name="payment_method" id="payment_method" class="form-control">
                                            <option value="" class="form-control">Изберете начин на плащане</option>
                                            <option value="в брой" class="form-control">в брой</option>
                                            <option value="по банков път" class="form-control">по банков път</option>
                                            <option value="с карта" class="form-control">с карта</option>
                                        </select>
                                        <small id="payment_methodError" class="text-danger"></small>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="price_without_vat" class="fw-bold">Сума без ДДС*</label>
                                        <input type="number" id="price_without_vat" name="price_without_vat" class="form-control" onchange="fetchContragentData()">
                                        <small id="price_without_vatError" class="text-danger"></small>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="contragent" class="fw-bold">Контрагент*</label>
                                        <select id="contragent" name="contragent_id" class="form-control" onchange="fetchContragentData()">
                                            <option value="">Избери контрагент</option>
                                            @foreach ($contragents as $contragent)
                                                <option value="{{ $contragent->id }}" id="contragentName">{{ $contragent->contragent_name }}</option>
                                            @endforeach
                                        </select>
                                        <small id="contragentError" class="text-danger"></small>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="paid" class="fw-bold">Платено*</label>
                                        <input type="checkbox" id="paid" name="paid">
                                        <small id="paidError" class="text-danger"></small>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="contragent_sum">% отстъпка за контрагент</label>
                                            <input id="contragent_sum" name="contragent_sum" type="text" class="form-control" readonly>
                                            <small id="contragent_sumError" class="text-danger"></small>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="total_sum" class="fw-bold">Реално постъпила сума без ДДС*</label>
                                            <input id="total_sum" name="total_sum" type="text" class="form-control">
                                            <small id="total_sumError" class="text-danger"></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-success float-end">Добави</button>
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
function fetchClientData() {
    const client = document.getElementById('client').value;
    if (!client) return;

    fetch(`{{ route('pages.tasks.getData', '') }}/${client}`)
        .then(response => response.json())
        .then(data => {
            const addressSelect = document.getElementById('client_address_1');
            
            // Clear existing options
            addressSelect.innerHTML = '<option value="">Изберете адрес</option>';
            
            // Add new options based on the client's addresses
            if (data.object_first) {
                addAddressOption(addressSelect, data.object_first, 'object1');
            }
            if (data.object_second) {
                addAddressOption(addressSelect, data.object_second, 'object2');
            }
            if (data.object_third) {
                addAddressOption(addressSelect, data.object_third, 'object3');
            }
            if (data.object_fourth) {
                addAddressOption(addressSelect, data.object_fourth, 'object4');
            }
        })
        .catch(error => console.error('Грешка:', error));
}

function addAddressOption(selectElement, address, id) {
    const option = document.createElement('option');
    option.value = address;
    option.textContent = address;
    option.id = id;
    selectElement.appendChild(option);
}
function fetchContragentData() {
    const contragent = document.getElementById('contragent').value; 
    if (!contragent) return;
    const priceNoVAT = document.getElementById('price_without_vat').value;

    fetch(`{{ route('pages.tasks.getContragentData', '') }}/${contragent}`)
        .then(response => response.json())
        .then(data => {
            document.getElementById('contragent_sum').value = data.commission_percentage; 
            if(data.commission_percentage === null || data.commission_percentage === 0){
                 document.getElementById('total_sum').value = priceNoVAT;
            }
            else{
                document.getElementById('total_sum').value = priceNoVAT-(priceNoVAT * (data.commission_percentage/100));

            }
        })
        .catch(error => console.error('Error:', error));
}
</script>
@endpush