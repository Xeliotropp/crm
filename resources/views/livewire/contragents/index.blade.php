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
                                <th>Контрагент</th>
                                <th>ЕИК/Булстат</th>
                                <th>Лице за Контакт</th>
                                <th>Телефон</th>
                                <th>Допълнителна информация</th>
                                <th>Процент комисионна</th>
                                <th>Действие</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contragents as $contragent)
                                <tr>
                                    <td>{{ $contragent->id }}</td>
                                    <td>{{ $contragent->contragent_name }}</td>
                                    <td>{{ $contragent->contragent_company_identifier }}</td>
                                    <td>{{ $contragent->contragent_contact_person }}</td>
                                    <td>{{ $contragent->contragent_phone_number }}</td>
                                    <td>{{ $contragent->contragent_additional_information }}</td>
                                    <td>{{ $contragent->commission_percentage }}</td>
                                    <td>
                                        <a href="{{ url('pages/contragents/' . $contragent->id . '/edit') }}"
                                            class="btn btn-success btn-sm">
                                            Редактиране
                                        </a>
                                        <a wire:click="deleteclient({{ $contragent->id }})" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                            class="btn btn-danger btn-sm">
                                            Изтриване
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        {{ $contragents->links() }}
                    </div>
                    <div>
                        <a class="btn btn-primary float-end" id="add" href="/pages/contragents/create">Добави нов</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
