@extends('layouts.app')
@section('title', 'Изглед на задача')

@section('content')
<div class="container-fluid mt-5 pd-5">
    <div class="row container-fluid">
        <div class="col-11 container-fluid">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('pages.tasks.index')}}" class="btn btn-primary float-end">Назад</a>
                    <h3>Задача № {{$task->id}}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('pages/tasks/' . $task->id) }}" method="POST" enctype="multipart/form-data">
                        <div class="d-flex">
                            <div class="col-md-5 mx-5">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="client" class="fw-bold">Клиент*</label>
                                        <input id="client" name="client" class="form-control" value="{{old('client', $task->client)}}" readonly>
                                        @error('client')
                                            <small id="clientError" class="text-danger"></small>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="client_address_1" class="fw-bold">Обект*</label>
                                        <input type="text" class="form-control" id="client_address_1" name="client_address_1" value="{{old('client_address_1', $task->client_address_1)}}" readonly>
                                        <small id="client_address_1Error" class="text-danger"></small>
                                    </div>
                                </div>
                                <div class="d-flex gap-5">
                                    <div class="mb-3 pe-5">
                                        <label for="dateOfMeasurement" class="fw-bold">Дата на измерване*</label>
                                        <input id="dateOfMeasurement" name="dateOfMeasurement" type="date" class="form-control" value="{{$task->dateOfMeasurement}}" readonly>
                                        @error('dateOfMeasurement')
                                            <small id="dateOfMeasurementError" class="text-danger"></small>
                                        @enderror
                                    </div>
                                    <div class="ms-4 ps-4">
                                        <label>Параметри на измерването</label>
                                        <section class="d-flex justify-content-start gap-3 flex-wrap">
                                            <div>
                                                <label for="mk">МКтопъл</label>
                                                <input id="mk" name="mk" type="checkbox" {{old('mk', $task->mk == '1' ? 'checked':'')}} disabled>
                                            </div>
                                            <div>
                                                <label for="mkcold">МКстуден</label>
                                                <input id="mkcold" name="mkcold" type="checkbox" {{old('mkcold', $task->mkcold == '1' ? 'checked':'')}} disabled>
                                            </div>
                                            <div>
                                                <label for="osv">ОСВ</label>
                                                <input id="osv" name="osv" type="checkbox" {{old('osv', $task->osv == '1' ? 'checked':'')}} disabled>
                                            </div>
                                            <div>
                                                <label for="osvEvak">ОСВ евак.</label>
                                                <input id="osvEvak" name="osvEvak" type="checkbox" {{old('osvEvak', $task->osvEvak == '1' ? 'checked':'')}} disabled>
                                            </div>
                                        </section>
                                        <section class="d-flex justify-content-start gap-3 flex-wrap">
                                            <div>
                                                <label for="sh">Шраб. среда</label>
                                                <input id="sh" name="sh" type="checkbox" {{old('sh', $task->sh == '1' ? 'checked':'')}} disabled>
                                            </div>
                                            <div>
                                                <label for="shobSgr">Шоб. сгр.</label>
                                                <input id="shobSgr" name="shobSgr" type="checkbox" {{old('shobSgr', $task->shobSgr == '1' ? 'checked':'')}} disabled>
                                            </div>
                                            <div>
                                                <label for="shokolSr">Шокол. ср.</label>
                                                <input id="shokolSr" name="shokolSr" type="checkbox" {{old('shokolSr', $task->shokolSr == '1' ? 'checked':'')}} disabled>
                                            </div>
                                            <div>
                                                <label for="vent">Вент</label>
                                                <input id="vent" name="vent" type="checkbox" {{old('vent', $task->vent == '1' ? 'checked':'')}} disabled>
                                            </div>
                                        </section>
                                        <section class="d-flex justify-content-start gap-3 flex-wrap">
                                            <div>
                                                <label for="klim">Клим</label>
                                                <input id="klim" name="klim" type="checkbox" {{old('klim', $task->klim == '1' ? 'checked':'')}} disabled>
                                            </div>
                                            <div>
                                                <label for="f0">F-0</label>
                                                <input id="f0" name="f0" type="checkbox" {{old('f0', $task->f0 == '1' ? 'checked':'')}} disabled>
                                            </div>
                                            <div>
                                                <label for="z">Z</label>
                                                <input id="z" name="z" type="checkbox" {{old('z', $task->z == '1' ? 'checked':'')}} disabled>
                                            </div>
                                            <div>
                                                <label for="m">M</label>
                                                <input id="m" name="m" type="checkbox" {{old('m', $task->m == '1' ? 'checked':'')}} disabled>
                                            </div>
                                            <div>
                                                <label for="izol">Изол</label>
                                                <input id="izol" name="izol" type="checkbox" {{old('izol', $task->izol == '1' ? 'checked':'')}} disabled>
                                            </div>
                                            <div>
                                                <label for="dtz">ДТЗ</label>
                                                <input id="dtz" name="dtz" type="checkbox" {{old('dtz', $task->dtz == '1' ? 'checked':'')}} disabled>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="wayOfShowingDocumentation" class="fw-bold">Начин на предоставяне на документация</label>
                                    <input type="text" id="wayOfShowingDocumentation" name="wayOfShowingDocumentation" class="form-control" value="{{old('wayOfShowingDocumentation', $task->wayOfShowingDocumentation)}}" readonly>
                                    <small id="wayOfShowingDocumentationError" class="text-danger"></small>
                                </div>
                                @if($task->wayOfShowingDocumentation == 'По куриер')
                                    <div id="courrierDetails">
                                        <label for="courrierDetails">Адрес за доставка</label>
                                        <input type="text" name="courrierDetails" class="form-control" value="{{$task->courrierDetails}}" readonly>
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="certificateNumber" class="fw-bold">Номер на сертификат*</label>
                                        <input id="certificateNumber" name="certificateNumber" type="text" class="form-control" value="{{old('certificateNumber', $task->certificateNumber)}}" readonly>
                                        <small id="certificateNumberError" class="text-danger"></small>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="certificateDate" class="fw-bold">Дата на сертификат*</label>
                                        <input id="certificateDate" name="certificateDate" type="date" class="form-control" value="{{old('certificateDate', $task->certificateDate)}}" readonly>
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
                                        <input id="nextMeasurementDate" name="nextMeasurement" type="date" class="form-control" value="{{old('nextMeasurement', $task->nextMeasurement)}}" readonly>
                                        <small id="nextMeasurementDateError" class="text-danger"></small>
                                    </div>
                                    <div class="ms-4 ps-4">
                                        <label>Параметри на следващото измерване</label>
                                        <section class="d-flex justify-content-start gap-3 flex-wrap">
                                            <div>
                                                <label for="mkNext">МКтопъл</label>
                                                <input id="mkNext" name="mkNext" type="checkbox" {{old('mkNext', $task->mkNext == '1' ? 'checked':'')}} disabled>
                                            </div>
                                            <div>
                                                <label for="mkcoldNext">МКстуден</label>
                                                <input id="mkcoldNext" name="mkcoldNext" type="checkbox" {{old('mkcoldNext', $task->mkcoldNext == '1' ? 'checked':'')}} disabled>
                                            </div>
                                            <div>
                                                <label for="osvNext">ОСВ</label>
                                                <input id="osvNext" name="osvNext" type="checkbox" {{old('osvNext', $task->osvNext == '1' ? 'checked':'')}} disabled>
                                            </div>
                                            <div>
                                                <label for="osvEvakNext">ОСВ евак.</label>
                                                <input id="osvEvakNext" name="osvEvakNext" type="checkbox" {{old('osvEvakNext', $task->osvEvakNext == '1' ? 'checked':'')}} disabled>
                                            </div>
                                        </section>
                                        <section class="d-flex justify-content-start gap-3 flex-wrap">
                                            <div>
                                                <label for="shNext">Шраб. среда</label>
                                                <input id="shNext" name="shNext" type="checkbox" {{old('shNext', $task->shNext == '1' ? 'checked':'')}} disabled>
                                            </div>
                                            <div>
                                                <label for="shobSgrNext">Шоб. сгр.</label>
                                                <input id="shobSgrNext" name="shobSgrNext" type="checkbox" {{old('shobSgrNext', $task->shobSgrNext == '1' ? 'checked':'')}} disabled>
                                            </div>
                                            <div>
                                                <label for="shOkolSrNext">Шокол. ср.</label>
                                                <input id="shOkolSrNext" name="shOkolSrNext" type="checkbox" {{old('shOkolSrNext', $task->shOkolSrNext == '1' ? 'checked':'')}} disabled>
                                            </div>
                                            <div>
                                                <label for="ventNext">Вент</label>
                                                <input id="ventNext" name="ventNext" type="checkbox" {{old('ventNext', $task->ventNext == '1' ? 'checked':'')}} disabled>
                                            </div>
                                        </section>
                                        <section class="d-flex justify-content-start gap-3 flex-wrap">
                                            <div>
                                                <label for="klimNext">Клим</label>
                                                <input id="klimNext" name="klimNext" type="checkbox" {{old('klimNext', $task->klimNext == '1' ? 'checked':'')}} disabled>
                                            </div>
                                            <div>
                                                <label for="f0Next">F-0</label>
                                                <input id="f0Next" name="f0Next" type="checkbox" {{old('f0Next', $task->f0Next == '1' ? 'checked':'')}} disabled>
                                            </div>
                                            <div>
                                                <label for="zNext">Z</label>
                                                <input id="zNext" name="zNext" type="checkbox" {{old('zNext', $task->zNext == '1' ? 'checked':'')}} disabled>
                                            </div>
                                            <div>
                                                <label for="mNext">M</label>
                                                <input id="mNext" name="mNext" type="checkbox" {{old('mNext', $task->mNext == '1' ? 'checked':'')}} disabled>
                                            </div>
                                            <div>
                                                <label for="izolNext">Изол</label>
                                                <input id="izolNext" name="izolNext" type="checkbox" {{old('izolNext', $task->izolNext == '1' ? 'checked':'')}} disabled>
                                            </div>
                                            <div>
                                                <label for="dtzNext">ДТЗ</label>
                                                <input id="dtzNext" name="dtzNext" type="checkbox" {{old('dtzNext', $task->dtzNext == '1' ? 'checked':'')}} disabled>
                                            </div>
                                        </section>
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
                                        <input type="text" id="invoice" name="invoice" class="form-control" value="{{$task->invoice}}" readonly>
                                        <small id="invoiceError" class="text-danger"></small>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="invoice_date" class="fw-bold">Дата на фактура*</label>
                                        <input type="date" id="invoice_date" name="invoice_date" class="form-control" value="{{$task->invoice_date}}" readonly>
                                        <small id="invoice_dateError" class="text-danger"></small>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="payment_method" class="fw-bold">Начин на плащане*</label>
                                        <input id="payment_method" name="payment_method" type="text" class="form-control" value="{{$task->payment_method}}" readonly>
                                        <small id="payment_methodError" class="text-danger"></small>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="price_without_vat" class="fw-bold">Сума без ДДС*</label>
                                        <input type="number" id="price_without_vat" name="price_without_vat" class="form-control" value="{{$task->price_without_vat}}" readonly>
                                        <small id="price_without_vatError" class="text-danger"></small>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="contragent" class="fw-bold">Контрагент*</label>
                                        <input type="text" class="form-control" id="contragent" name="contragent" value="{{$task->contragent}}" readonly>
                                        <small id="contragentError" class="text-danger"></small>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="paid" class="fw-bold">Платено*</label>
                                        <input type="checkbox" id="paid" name="paid" {{old('paid', $task->paid == '1' ? 'checked':'')}} disabled>
                                        <small id="paidError" class="text-danger"></small>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="contragent_sum">% отстъпка за контрагент</label>
                                            <input id="contragent_sum" name="contragent_sum" type="text" class="form-control" value="{{$task->contragent_sum}}" readonly>
                                            <small id="contragent_sumError" class="text-danger"></small>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="total_sum" class="fw-bold">Реално постъпила сума без ДДС*</label>
                                            <input id="total_sum" name="total_sum" type="text" class="form-control" value="{{old('total_sum',$task->total_sum)}}" readonly>
                                            <small id="total_sumError" class="text-danger"></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
