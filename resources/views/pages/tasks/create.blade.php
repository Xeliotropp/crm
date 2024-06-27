@extends('layouts.app')
@section('title', 'Създаване на задача')

@section('content')
<div class="container-fluid mt-5 pd-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>
                        Създаване на задача
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('pages/tasks') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="clientId" class="fw-bold">Клиент*</label>
                                        <select wire:model="selectedClient" id="clientId" name="clientId" class="form-control">
                                            <option value="">Избери клиент</option>
                                            @foreach ($clients as $client)
                                                <option value="{{ $client->id }}">{{ $client->client }}</option>
                                            @endforeach
                                        </select>
                                        @error('clientId') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
            
                                    <div class="col-md-12 mb-3">
                                        <label for="Object1" class="fw-bold">Адрес на обекта*</label>
                                            <input type="text" class="form-control" value="{{$client->object_first}}"></input>
                                        @error('adressObject1') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
    
                                    <div class="col-md-12 mb-3">
                                        <label for="adressObject2">Втори адрес на обекта</label>
                                        <select name="adressObject2" class="form-control">
                                            @foreach ($clients as $client)
                                            <option value="{{$client->id}}">{{$client->adress_object_2}}</option>
                                           @endforeach
                                        </select>
                                        @error('adressObject3') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
    
                                    <div class="col-md-12 mb-3">
                                        <label for="adressObject3">Трети адрес на обекта</label>
                                        <select name="adressObject3" class="form-control">
                                            @foreach ($clients as $client)
                                            <option value="{{$client->id}}">{{$client->adress_object_3}}</option>
                                           @endforeach
                                        </select>
                                        @error('adressObject3') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
    
                                    <div class="col-md-12 mb-3">
                                        <label for="adressObject4">Четвърти адрес на обекта</label>
                                        <select name="adressObject4" class="form-control">
                                            @foreach ($clients as $client)
                                            <option value="{{$client->id}}">{{$client->adress_object_4}}</option>
                                           @endforeach
                                        </select>
                                        @error('adressObject4') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
        
                                    <div class="h-25 d-flex gap-5 ">
                                        <div class="mb-3 pe-5">
                                            <label for="certificateDate" class="fw-bold">Дата на следващо измерване*</label>
                                            <input name = "certificateDate" type="date" class="form-control">   
                                            @error('certificateDate') <small class="text-danger">{{ $message }}</small> @enderror   
                                        </div>
                                        <div class="ms-5 ps-5">
                                            <label>Параметри на измерването</label><br>
                                            <label for="mk">МК</label>
                                            <input name="mk" type="checkbox"></input>&nbsp;&nbsp;&nbsp;&nbsp;
        
                                            <label for="osv">ОСВ</label>
                                            <input name="osv" type="checkbox"></input>&nbsp;&nbsp;&nbsp;&nbsp;
        
                                            <label for="sh">Ш</label>
                                            <input name="sh" type="checkbox"></input>&nbsp;&nbsp;&nbsp;&nbsp;
        
                                            <label for="vent">Вент</label>
                                            <input name="vent" type="checkbox"></input>&nbsp;&nbsp;&nbsp;&nbsp;
        
                                            <label for="klim">Клим</label>
                                            <input name="klim" type="checkbox"></input>&nbsp;&nbsp;&nbsp;&nbsp;
        
                                            <div></div>
                                            <label for="f-0">F-0</label>
                                            <input name="f-0" type="checkbox"></input>&nbsp;&nbsp;&nbsp;&nbsp;
        
                                            <label for="z">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Z</label>
                                            <input name="z" type="checkbox"></input>&nbsp;&nbsp;&nbsp;&nbsp;
        
                                            <label for="m">M</label>
                                            <input name="m" type="checkbox"></input>&nbsp;&nbsp;&nbsp;&nbsp;
        
                                            <label for="izol">Изол</label>
                                            <input name="izol" type="checkbox"></input>&nbsp;&nbsp;&nbsp;&nbsp;
        
                                            <label for="dtz">&nbsp;&nbsp;ДТЗ</label>
                                            <input name="dtz" type="checkbox"></input>&nbsp;
                                        </div>
                                    </div>
            
                                   
        
                                    <div class="col-md-12 mb-3">
                                        <label for="wayOfShowingDocumentation" class="fw-bold">Начин на предоставяне на документация</label>
                                        <input type="text" name="wayOfShowingDocumentation" class="form-control" rows="3"></input>
                                        @error('wayOfShowingDocumentation') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
            
                                    <div class="col-md-6 mb-3">
                                        <label for="certificateNumber" class="fw-bold">Номер на сертификат*</label>
                                        <input name = "certificateNumber" type="text" class="form-control">
                                        @error('certificateNumber') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="certificateDate" class="fw-bold">Дата на сертификат*</label>
                                        <input name = "certificateDate" type="date" class="form-control">
                                        @error('certificateDate') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    <label for="contragent_contact_person" class="fw-bold">Следващо измерване</label><br>
                                    <div class="h-25 d-flex gap-5 ">
                                        <div class="mb-3 pe-5">
                                            <label for="certificateDate" class="fw-bold">Дата на следващо измерване*</label>
                                            <input name = "certificateDate" type="date" class="form-control">   
                                            @error('certificateDate') <small class="text-danger">{{ $message }}</small> @enderror   
                                        </div>
                                        <div class="ms-5 ps-5">
                                            <label>Параметри на измерването</label><br>
                                            <label for="mkNext">МК</label>
                                            <input name="mkNext" type="checkbox"></input>&nbsp;&nbsp;&nbsp;&nbsp;
        
                                            <label for="osvNext">ОСВ</label>
                                            <input name="osvNext" type="checkbox"></input>&nbsp;&nbsp;&nbsp;&nbsp;
        
                                            <label for="shNext">Ш</label>
                                            <input name="shNext" type="checkbox"></input>&nbsp;&nbsp;&nbsp;&nbsp;
        
                                            <label for="ventNext">Вент</label>
                                            <input name="ventNext" type="checkbox"></input>&nbsp;&nbsp;&nbsp;&nbsp;
        
                                            <label for="klimNext">Клим</label>
                                            <input name="klimNext" type="checkbox"></input>&nbsp;&nbsp;&nbsp;&nbsp;
        
                                            <div></div>
                                            <label for="f-0Next">F-0</label>
                                            <input name="f-0Next" type="checkbox"></input>&nbsp;&nbsp;&nbsp;&nbsp;
        
                                            <label for="zNext">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Z</label>
                                            <input name="zNext" type="checkbox"></input>&nbsp;&nbsp;&nbsp;&nbsp;
        
                                            <label for="mNext">M</label>
                                            <input name="mNext" type="checkbox"></input>&nbsp;&nbsp;&nbsp;&nbsp;
        
                                            <label for="izolNext">Изол</label>
                                            <input name="izolNext" type="checkbox"></input>&nbsp;&nbsp;&nbsp;&nbsp;
        
                                            <label for="dtzNext">&nbsp;&nbsp;ДТЗ</label>
                                            <input name="dtzNext" type="checkbox"></input>&nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- vertical line-->
                            <div class="vr mx-5" >&nbsp;</div>
                            <!-- vertical line-->
                            <div class="col-md-6">
                                <p>test</p>
                                <p>test</p>
                                <p>test</p>
                                <p>test</p>
                                <p>test</p>
                                <p>test</p>
                                <p>test</p>
                                <p>test</p>
                                <p>test</p>
                            </div>
                        </div>
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