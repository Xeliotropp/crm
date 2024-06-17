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
                                <th>Адрес</th>
                                <th>Допълнителна информация</th>
                                <th>Процент комисионна</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contragents as $contragent)
                                <tr>
                                    <td>{{ $contragent->id }}</td>
                                    <td>{{ $contragent->contragent }}</td>
                                    <td>{{ $contragent->company_identifier }}</td>
                                    <td>{{ $contragent->contact_person }}</td>
                                    <td>{{ $contragent->phone_number }}</td>
                                    <td>{{ $contragent->address }}</td>
                                    <td>{{ $contragent->additional_information }}</td>
                                    <td>{{ $contragent->comission_percentage }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        {{ $contragents->links() }}
                    </div>
                    <div>
                        <a class="btn btn-primary float-end" id="add">Добави нов</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
