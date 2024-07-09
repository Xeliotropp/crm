<div>
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Изтриване на клиент</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="destroyClient">
                    <div class="modal-body">
                        <h6>Сигурни ли сте, че искате да изтриете записа?</h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Затвори</button>
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Да, изтрий!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-14 mt-4">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>№</th>
                                    <th>Клиент</th>
                                    <th>ЕИК</th>
                                    <th>Лице за Контакт</th>
                                    <th>Телефон</th>
                                    <th>Адрес</th>
                                    <th>Допълнителна информация</th>
                                    <th>Обект 1</th>
                                    <th>Обект 1 адрес</th>
                                    <th>Обект 2</th>
                                    <th>Обект 2 адрес</th>
                                    <th>Обект 3</th>
                                    <th>Обект 3 адрес</th>
                                    <th>Обект 4</th>
                                    <th>Обект 4 адрес</th>
                                    <th>Действие</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $client)
                                    <tr>
                                        <td><a href="{{url('/crm/pages/clients/view/'.$client->id)}}">{{ $client->id }}</a></td>
                                        <td>{{ $client->client }}</td>
                                        <td>{{ $client->company_identifier }}</td>
                                        <td>{{ $client->contact_person }}</td>
                                        <td>{{ $client->phone_number }}</td>
                                        <td>{{ $client->address }}</td>
                                        <td>{{ $client->additional_information }}</td>
                                        <td>{{ $client->object_first }}</td>  
                                        <td>{{ $client->adress_object_1 }}</td>  
                                        <td>{{ $client->object_second }}</td>
                                        <td>{{ $client->adress_object_2 }}</td>  
                                        <td>{{ $client->object_third }}</td>
                                        <td>{{ $client->adress_object_3 }}</td>  
                                        <td>{{ $client->object_fourth }}</td>
                                        <td>{{ $client->adress_object_4 }}</td>  

                                        <td>
                                            <a href="{{ url('crm/pages/clients/' . $client->id . '/edit') }}"
                                                class="btn btn-success btn-sm">
                                                Редактиране
                                            </a>
                                            <a wire:click="deleteClient({{ $client->id }})" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal"
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
</div>
@push('script')
<script>
    window.addEventListener('close-modal', event => {
        $('#deleteModal').modal('hide');
    });
</script>
@endpush
