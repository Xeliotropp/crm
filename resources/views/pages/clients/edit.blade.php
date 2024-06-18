@extends('layouts.app')
@section('title', 'Редактиране на клиент')

@section('content')
    <div class="container">
    @section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Редактиране на клиент
                            <a href="{{ url('pages/client') }}"
                                class="btn btn-primary btn-sm text-white float-end">Назад</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('pages/clients') . $client->id }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="client" class = "fw-bold">Име*</label>
                                    <input type="text" name="client" value="{{ $client->client }}" class="form-control" id="client">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
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
