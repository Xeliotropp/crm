<div>
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Изтриване на контрагент</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="destroyContragent">
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
                                            <a wire:click="deleteContragent({{ $contragent->id }})" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal"
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
</div>
@push('script')
<script>
    window.addEventListener('close-modal', event => {
        $('#deleteModal').modal('hide');
    });
</script>
@endpush