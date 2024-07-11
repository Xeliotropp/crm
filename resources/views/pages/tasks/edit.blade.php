@extends('layouts.app')
@section('title', 'Редактиране на задача')

@section('content')
<div class="container-fluid mt-5 pd-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('crm/pages/tasks/') }}"
                    class="btn btn-primary btn-sm text-white float-end">Назад</a>
                    <h3>Редактиране на задача</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('crm/pages/tasks/' . $task->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="d-flex">
                            <div class="col-md-5 mx-5">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="client" class="fw-bold">Клиент*</label>
                                        <select name="client_id" id="client" class="form-control" onchange="fetchClientData()">
                                            @foreach ($clients as $client)
                                            <option value="{{ $client->id }}" {{ $task->client_id == $client->id ? 'selected' : '' }}>
                                                {{ $client->client }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('client')
                                            <small id="clientError" class="text-danger"></small>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="client_address_1" class="fw-bold">Избор на обект*</label>
                                        <select name="client_address_1" id="client_address_1" class="form-control">
                                            <option value="{{old('client_address_1', $task->client_address_1)}}">{{old('client_address_1', $task->client_address_1)}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex gap-5">
                                    <div class="mb-3 pe-5">
                                        <label for="certificateDate" class="fw-bold">Дата на измерване*</label>
                                        <input id="dateOfMeasurement" name="dateOfMeasurement" type="date" class="form-control" value="{{$task->dateOfMeasurement}}">
                                        @error('certificiteDate')
                                            <small id="certificateDateError" class="text-danger"></small>
                                        @enderror
                                    </div>
                                    <div class="ms-5 ps-5">
                                        <label>Параметри на измерването</label><br>
                                        <label for="mk">МК</label>
                                        <input id="mk" name="mk" type="checkbox" {{old('mk', $task->mk == '1' ? 'checked':'')}}>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="osv">ОСВ</label>
                                        <input id="osv" name="osv" type="checkbox" {{old('osv', $task->osv == '1' ? 'checked':'')}}>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="sh">Ш</label>
                                        <input id="sh" name="sh" type="checkbox" {{old('sh', $task->sh == '1' ? 'checked':'')}}>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="vent">Вент</label>
                                        <input id="vent" name="vent" type="checkbox" {{old('vent', $task->vent == '1' ? 'checked':'')}}>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="klim">Клим</label>
                                        <input id="klim" name="klim" type="checkbox" {{old('klim', $task->klim == '1' ? 'checked':'')}}>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <div></div>
                                        <label for="f0">F-0</label>
                                        <input id="f0" name="f0" type="checkbox" {{old('f0', $task->f0 == '1' ? 'checked':'')}}>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="z">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Z</label>
                                        <input id="z" name="z" type="checkbox" {{old('z', $task->z == '1' ? 'checked':'')}}>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="m">M</label>
                                        <input id="m" name="m" type="checkbox" {{old('m', $task->m == '1' ? 'checked':'')}}>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="izol">Изол</label>
                                        <input id="izol" name="izol" type="checkbox" {{old('izol', $task->izol == '1' ? 'checked':'')}}>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="dtz">&nbsp;&nbsp;ДТЗ</label>
                                        <input id="dtz" name="dtz" type="checkbox" {{old('dtz', $task->dtz == '1' ? 'checked':'')}}>&nbsp;
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="wayOfShowingDocumentation" class="fw-bold">Начин на предоставяне на документация</label>
                                    <input type="text" id="wayOfShowingDocumentation" name="wayOfShowingDocumentation" class="form-control" rows="3" value="{{old('wayOfShowingDocumentation', $task->wayOfShowingDocumentation)}}">
                                    <small id="wayOfShowingDocumentationError" class="text-danger"></small>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="certificateNumber" class="fw-bold">Номер на сертификат*</label>
                                        <input id="certificateNumber" name="certificateNumber" type="text" class="form-control" value="{{old('certificateNumber', $task->certificateNumber)}}">
                                        <small id="certificateNumberError" class="text-danger"></small>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="certificateDate" class="fw-bold">Дата на сертификат*</label>
                                        <input id="certificateDate" name="certificateDate" type="date" class="form-control" value="{{old('certificateDate', $task->certificateDate)}}">
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
                                        <input id="nextMeasurementDate" name="nextMeasurement" type="date" class="form-control" value="{{old('nextMeasurement', $task->nextMeasurement)}}">
                                        <small id="nextMeasurementDateError" class="text-danger"></small>
                                    </div>
                                    <div class="ms-5 ps-5">
                                        <label for="mkNext">МК</label>
                                        <input id="mkNext" name="mkNext" type="checkbox" {{old('mkNext', $task->mkNext == '1' ? 'checked':'')}}>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="osvNext">ОСВ</label>
                                        <input id="osvNext" name="osv" type="checkbox" {{old('osvNext', $task->osvNext == '1' ? 'checked':'')}}>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="shNext">Ш</label>
                                        <input id="shNext" name="sh" type="checkbox" {{old('shNext', $task->shNext == '1' ? 'checked':'')}}>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="ventNext">Вент</label>
                                        <input id="ventNext" name="vent" type="checkbox" {{old('ventNext', $task->ventNext == '1' ? 'checked':'')}}>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="klimNext">Клим</label>
                                        <input id="klimNext" name="klimNext" type="checkbox" {{old('klimNext', $task->klimNext == '1' ? 'checked':'')}}>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <div></div>
                                        <label for="f0Next">F-0</label>
                                        <input id="f0Next" name="f0Next" type="checkbox" {{old('f0Next', $task->f0Next == '1' ? 'checked':'')}}>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="zNext">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Z</label>
                                        <input id="zNext" name="zNext" type="checkbox" {{old('zNext', $task->zNext == '1' ? 'checked':'')}}>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="mNext">M</label>
                                        <input id="mNext" name="mNext" type="checkbox" {{old('mNext', $task->mNext == '1' ? 'checked':'')}}>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="izolNext">Изол</label>
                                        <input id="izolNext" name="izolNext" type="checkbox" {{old('izolNext', $task->izolNext == '1' ? 'checked':'')}}>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="dtzNext">&nbsp;&nbsp;ДТЗ</label>
                                        <input id="dtzNext" name="dtzNext" type="checkbox" {{old('dtzNext', $task->dtzNext == '1' ? 'checked':'')}}>&nbsp;
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
                                        <input type="text" id="invoice" name="invoice" class="form-control" value="{{$task->invoice}}">
                                        <small id="invoiceError" class="text-danger"></small>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="invoice_date" class="fw-bold">Дата на фактура*</label>
                                        <input type="date" id="invoice_date" name="invoice_date" class="form-control" value="{{$task->invoice_date}}">
                                        <small id="invoice_dateError" class="text-danger"></small>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="payment_method" class="fw-bold">Начин на плащане*</label>
                                        <input id="payment_method" name="payment_method" type="text" class="form-control" placeholder="В брой или С карта" value="{{$task->payment_method}}">
                                        <small id="payment_methodError" class="text-danger"></small>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="price_without_vat" class="fw-bold">Сума без ДДС*</label>
                                        <input type="number" id="price_without_vat" name="price_without_vat" class="form-control" onchange="fetchContragentData()" value="{{$task->price_without_vat}}">
                                        <small id="price_without_vatError" class="text-danger"></small>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="contragentId" class="fw-bold">Контрагент*</label>
                                        <select name="contragent_id" id="contragent" class="form-control" onchange="fetchContragentData()">
                                            @foreach ($contragents as $contragent)
                                            <option value="{{ $contragent->id }}" {{ $task->contragent_id == $contragent->id ? 'selected' : '' }}>
                                                {{ $contragent->contragent_name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        <small id="contragentIdError" class="text-danger"></small>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="paid" class="fw-bold">Платено*</label>
                                        <input type="checkbox" id="paid" name="paid" {{old('paid', $task->paid == '1' ? 'checked':'')}}>
                                        <small id="paidError" class="text-danger"></small>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="contragent_sum">% отстъпка за контрагент</label>
                                            <input id="contragent_sum" name="contragent_sum" type="text" class="form-control" value="{{$task->contragent_sum}}">
                                            <small id="contragent_sumError" class="text-danger"></small>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="total_sum" class="fw-bold">Реално постъпила сума без ДДС*</label>
                                            <input id="total_sum" name="total_sum" type="text" class="form-control" value="{{old('total_sum',$task->total_sum)}}">
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
                            <button type="submit" class="btn btn-success float-end">Публикувай</button>
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
    function fetchClientData() {
        const client = document.getElementById('client').value;
        if (!client) return;

        fetch(`{{ route('pages.tasks.getData', '') }}/${client}`)
            .then(response => response.json())
            .then(data => {
                const addressSelect = document.getElementById('client_address_1');
                
                // Clear existing options
                addressSelect.innerHTML = '<option value="">Изберете обект</option>';
                
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
                const contragentSum = document.getElementById('contragent_sum');
                const totalSum = document.getElementById('total_sum');
                
                if (contragentSum) {
                    contragentSum.value = data.commission_percentage; 
                }

                if (totalSum) {
                    if (data.commission_percentage === null || data.commission_percentage === 0) {
                        totalSum.value = priceNoVAT;
                    } else {
                        totalSum.value = priceNoVAT - (priceNoVAT * (data.commission_percentage / 100));
                    }
                }
            })
            .catch(error => console.error('Error:', error));
    }
    
    window.fetchClientData = fetchClientData;
    window.fetchContragentData = fetchContragentData;
});
</script>
@endpush