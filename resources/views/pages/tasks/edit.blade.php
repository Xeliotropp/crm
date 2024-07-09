@extends('layouts.app')
@section('title', 'Редактиране на задача')

@section('content')
<div class="container-fluid mt-5 pd-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
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
                                        <input id="client" name="client" class="form-control" value="{{old('client', $task->client)}}">
                                        @error('client')
                                            <small id="clientError" class="text-danger"></small>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="client_address_1" class="fw-bold">Адрес на обекта*</label>
                                        <input type="text" class="form-control" id="object1" name="client_address_1" value="{{old('client_address_1', $task->client_address_1)}}">
                                        <small id="object1Error" class="text-danger"></small>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="client_address_2">Втори адрес на обекта</label>
                                        <input type="text" class="form-control" id="object2" name="client_address_2" value="{{old('client_address_2', $task->client_address_2)}}">
                                        <small id="object2Error" class="text-danger"></small>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="client_address_3">Трети адрес на обекта</label>
                                        <input type="text" class="form-control" id="object3" name="client_address_3" value="{{old('client_address_3', $task->client_address_3)}}">
                                        <small id="object3Error" class="text-danger"></small>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="client_address_4">Четвърти адрес на обекта</label>
                                        <input type="text" class="form-control" id="object4" name="client_address_4" value="{{old('client_address_4', $task->client_address_4)}}">
                                        <small id="object4Error" class="text-danger"></small>
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
                                        <input type="number" id="price_without_vat" name="price_without_vat" class="form-control" value="{{$task->price_without_vat}}">
                                        <small id="price_without_vatError" class="text-danger"></small>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="contragentId" class="fw-bold">Контрагент*</label>
                                        <input type="text" class="form-control" id="contragent" name="contragent" value="{{$task->contragent}}">
                                        <small id="contragentIdError" class="text-danger"></small>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="paid" class="fw-bold">Платено*</label>
                                        <input type="checkbox" id="paid" name="paid" {{old('paid', $task->paid == '1' ? 'checked':'')}}>
                                        <small id="paidError" class="text-danger"></small>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="contragent_sum" class="fw-bold">Сума на контрагент*</label>
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
function fetchClientData() {
    const client = document.getElementById('client').value;
    if (!client) return;

    fetch(`{{ route('pages.tasks.getData', '') }}/${client}`)
        .then(response => response.json())
        .then(data => {
            // Populate form fields with the returned data
            document.getElementById('object1').value = data.object_first || '';
            document.getElementById('object2').value = data.object_second || '';
            document.getElementById('object3').value = data.object_third || '';
            document.getElementById('object4').value = data.object_fourth || '';
            // Add more fields as needed
        })
        .catch(error => console.error('Грешка:', error));
}
function fetchContragentData() {
    const contragentId = document.getElementById('contragentId').value;
    const priceNoVAT = document.getElementById('price_without_vat').value;
    if (!contragentId) return;

    fetch(`{{ route('pages.tasks.getContragentData', '') }}/${contragentId}`)
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