<style>
    .table-container {
        max-width: 100%;
        overflow-x: auto;
    }
</style>
<div>
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Изтриване на клиент</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="destroyTask">
                    <div class="modal-body">
                        <h6>Сигурни ли сте, че искате да изтриете записа?</h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Затвори</button>
                        <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Да, изтрий!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <p class="text-danger fw-bold text-center h1">ВСЕ ОЩЕ НЕ РАБОТИ ИЗЦЯЛО!</p>
    <div class="container-fluid mt-5">
        <div class="row container-fluid">
            <div class="col-12 container-fluid">
                <div class="card container-fluid">
                    <div class="card-body table-container">
                        <table class="table table-responsive-sm table-bordered table-striped col-8">
                            <thead>
                                <tr>
                                    <th>№</th>
                                    <th>Клиент</th>
                                    <th>Обект</th>
                                    <th>Дата на измерване</th>
                                    <th>Начин на предоставяне на документация</th>
                                    <th>Номер на сертификат</th>
                                    <th>Дата на сертификат</th>
                                    <th>Дата на следващо измерване</th>
                                    <th>Номер на фактура</th>
                                    <th>Платено</th>
                                    <th>Дата на фактура</th>
                                    <th>Начин на плащане</th>
                                    <th>Сума без ДДС</th>
                                    <th>Сума на контрагент</th>
                                    <th>Реално постъпила сума без ДДС</th>
                                    <th>Действие</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td><a href="{{url('/crm/pages/tasks/view/'.$task->id)}}">{{ $task->id }} </a></td>
                                        <td id="client">{{$task->client->client}}</td>
                                        <td>{{$task->client_address_1}}</td>
                                        <td>{{ $task->dateOfMeasurement }}</td>
                                        <td>{{ $task->wayOfShowingDocumentation }}</td>
                                        <td>{{ $task->certificateNumber }}</td>
                                        <td>{{ $task->certificateDate }}</td>
                                        <td>{{ $task->nextMeasurement }}</td>  
                                        <td>{{ $task->invoice }}</td>
                                        <td>{{ $task->paid == '0' ? 'Не' : 'Да' }}</td>
                                        <td>{{ $task->invoice_date }}</td>  
                                        <td>{{ $task->payment_method}}</td>  
                                        <td>{{ $task->price_without_vat }}</td>  

                                        <td>{{ $task->contragent_sum }}</td>
                                        <td>{{ $task->total_sum }}</td>  
                                        <td>
                                            <div class="d-flex w-auto">
                                                <a href="{{ url('crm/pages/tasks/' . $task->id . '/edit') }}"
                                                    class="btn btn-success btn-sm">
                                                    Редактиране
                                                </a>
                                                <a wire:click="deleteTask({{ $task->id }})" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                    class="btn btn-danger btn-sm">
                                                    Изтриване
                                                </a>    
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div>
                            {{ $tasks->links() }}
                        </div>
                        <div>
                            <a href="/crm/pages/tasks/create" class="btn btn-primary float-end">Добави нов</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>