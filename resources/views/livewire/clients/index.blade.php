@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-14 mt-4">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>№</th>
                                    <th>Клиент</th>
                                    <th>ЕИК/Булстат</th>
                                    <th>Лице за Контакт</th>
                                    <th>Телефон</th>
                                    <th>Адрес</th>
                                    <th>Допълнителна информация</th>
                                    <th>Обект</th>
                                    <th>Действие</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $client)
                                    <tr>
                                        <td>{{ $client->id }}</td>
                                        <td>{{ $client->client }}</td>
                                        <td>{{ $client->company_identifier }}</td>
                                        <td>{{ $client->contact_person }}</td>
                                        <td>{{ $client->phone_number }}</td>
                                        <td>{{ $client->address }}</td>
                                        <td>{{ $client->additional_information }}</td>
                                        <td>{{ $client->object_first }}</td>
                                        <td>
                                            <a href="{{ url('pages/clients/' . $client->id . '/edit') }}"
                                                class="btn btn-success btn-sm">
                                                Редактиране
                                            </a>
                                            <a wire:click="deleteclient({{ $client->id }})" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                class="btn btn-danger btn-sm">
                                                Изтриване
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div>
                            {{ $clients->links() }}
                        </div>
                        <div>
                            <a href="/pages/clients/create" class="btn btn-primary float-end">Добави нов</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
