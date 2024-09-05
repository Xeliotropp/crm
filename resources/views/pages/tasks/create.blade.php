@extends('layouts.app')
@section('title', 'Създаване на задача')

@section('content')
    <div class="container-fluid mt-5 pd-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Създаване на задача</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pages.tasks.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="d-flex">
                                <div class="col-md-5 mx-5">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="client" class="fw-bold">Клиент<span style="color:red">*</span></label>
                                            <input type="hidden" name="client_id" id="client_id" value="{{ $task->client_id ?? '' }}">
                                            <input type="text" name="client" id="client" class="form-control" placeholder="Въведете име на клиент..." onchange="fetchClientData()" data-client-id="{{ $task->client_id ?? '' }}" value="{{ $task->client->client ?? '' }}" />
                                            @error('client')
                                                <small id="clientError" class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="client_address_1" class="fw-bold">Избор на обект<span style="color:red">*</span></label>
                                            <select name="client_address_1" id="client_address_1" class="form-control">
                                                <option value="">Изберете обект</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-5">
                                        <div class="mb-3 pe-5">
                                            <label for="certificateDate" class="fw-bold">Дата на измерване</label>
                                            <input id="dateOfMeasurement" name="dateOfMeasurement" type="date" class="form-control" value="{{ old('dateOfMeasurement') }}">
                                            @error('dateOfMeasurement')
                                                <small id="certificateDateError" class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="ms-4 ps-4">
                                            <label class="fw-bold">Параметри на измерването</label>
                                            <section class="d-flex justify-content-start gap-3 flex-wrap"
                                                id="first-section">
                                                <div>
                                                    <label for="mk">МКтопъл</label>
                                                    <input id="mk" name="mk" type="checkbox" {{ old('mk') ? 'checked' : '' }}>
                                                </div>
                                                <div>
                                                    <label for="mk">МКстуден</label>
                                                    <input id="mkcold" name="mkcold" type="checkbox" {{ old('mkcold') ? 'checked' : '' }}>
                                                </div>
                                                <div>
                                                    <label for="osv">ОСВ</label>
                                                    <input id="osv" name="osv" type="checkbox" {{ old('osv') ? 'checked' : '' }}>
                                                </div>
                                                <div>
                                                    <label for="osv">ОСВ евак.</label>
                                                    <input id="osvEvak" name="osv" type="checkbox" {{ old('osvEvak') ? 'checked' : '' }}>
                                                </div>
                                            </section>
                                            <section class="d-flex justify-content-start gap-3 flex-wrap"
                                                id="second-section">
                                                <div>
                                                    <label for="sh">Шраб. среда</label>
                                                    <input id="sh" name="sh" type="checkbox" {{ old('sh') ? 'checked' : '' }}>
                                                </div>
                                                <div>
                                                    <label for="shobSgr">Шоб. сгр.</label>
                                                    <input id="shobSgr" name="shobSgr" type="checkbox" {{ old('shobSgr') ? 'checked' : '' }}>
                                                </div>
                                                <div>
                                                    <label for="shokolSr">Шокол. ср.</label>
                                                    <input id="shokolSr" name="shokolSr" type="checkbox" {{ old('shokolSr') ? 'checked' : '' }}>
                                                </div>
                                                <div>
                                                    <label for="vent">Вент</label>
                                                    <input id="vent" name="vent" type="checkbox" {{ old('vent') ? 'checked' : '' }}>
                                                </div>
                                            </section>
                                            <section class="d-flex justify-content-start gap-3 flex-wrap"
                                                id="third-section">
                                                <div>
                                                    <label for="klim">Клим</label>
                                                    <input id="klim" name="klim" type="checkbox" {{ old('klim') ? 'checked' : '' }}>
                                                </div>
                                                <div>
                                                    <label for="f0">F-0</label>
                                                    <input id="f0" name="f0" type="checkbox"
                                                        {{ old('f0') ? 'checked' : '' }}>
                                                </div>
                                                <div>
                                                    <label for="z">Z</label>
                                                    <input id="z" name="z" type="checkbox" {{ old('z') ? 'checked' : '' }}>
                                                </div>
                                                <div>
                                                    <label for="m">M</label>
                                                    <input id="m" name="m" type="checkbox" {{ old('m') ? 'checked' : '' }}>
                                                </div>
                                                <div>
                                                    <label for="izol">Изол</label>
                                                    <input id="izol" name="izol" type="checkbox" {{ old('izol') ? 'checked' : '' }}>
                                                </div>
                                                <div>
                                                    <label for="dtz">ДТЗ</label>
                                                    <input id="dtz" name="dtz" type="checkbox" {{ old('dtz') ? 'checked' : '' }}>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    <p></p>
                                    <div class="col-md-12 mb-3">
                                        <label for="wayOfShowingDocumentation" class="fw-bold">Начин на предоставяне на документация</label>
                                        <select name="wayOfShowingDocumentation" id="wayOfShowingDocumentation"
                                            class="form-control">
                                            <option value="" class="form-control">-- Изберете начин на предоставяне на документация --</option>
                                            <option value="По куриер" class="form-control">По куриер</option>
                                            <option value="По Борислав" class="form-control">По Борислав</option>
                                            <option value="По Пламен" class="form-control">По Пламен</option>
                                            <option value="По Ники" class="form-control">По Ники</option>
                                            <option value="По Данката" class="form-control">По Данката</option>
                                        </select>

                                        <div id="courrierDetails" style="display: none">
                                            <label for="courrierDetails">Адрес за доставка</label>
                                            <input type="text" name="courrierDetails" class="form-control" value="{{ old('courrierDetails') }}">
                                        </div>

                                        <small id="wayOfShowingDocumentationError" class="text-danger"></small>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="certificateNumber" class="fw-bold">Номер на сертификат</label>
                                            <input id="certificateNumber" name="certificateNumber" type="text" class="form-control" value="{{ old('certificateNumber') }}">
                                            <small id="certificateNumberError" class="text-danger"></small>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="certificateDate" class="fw-bold">Дата на сертификат</label>
                                            <input id="certificateDate" name="certificateDate" type="date" class="form-control" value="{{ old('certificateDate') }}">
                                            <small id="certificateDateError" class="text-danger"></small>
                                        </div>
                                    </div>
                                    <br>
                                    <hr>
                                    <br>
                                    <p class="fw-bold text-center">Следващо измерване</p>
                                    <div class="h-25 d-flex gap-5">
                                        <div class="mb-3 pe-5">
                                            <label for="nextMeasurement" class="fw-bold">Дата на следващо измерване</label>
                                            <input id="nextMeasurementDate" name="nextMeasurement" type="date" class="form-control" value="{{ old('nextMeasurement') }}">
                                            <small id="nextMeasurementDateError" class="text-danger"></small>
                                        </div>
                                        <div class="ms-4 ps-4">
                                            <label class = "fw-bold">Параметри на следващото измерване</label>
                                            <section class="d-flex justify-content-start gap-3 flex-wrap">
                                                <div>
                                                    <label for="mkNext">МКтопъл</label>
                                                    <input id="mkNext" name="mkNext" type="checkbox" {{ old('mkNext') ? 'checked' : '' }}>
                                                </div>
                                                <div>
                                                    <label for="mkcoldNext">МКстуден</label>
                                                    <input id="mkcoldNext" name="mkcoldNext" type="checkbox" {{ old('mkcoldNext') ? 'checked' : '' }}>
                                                </div>
                                                <div>
                                                    <label for="osvNext">ОСВ</label>
                                                    <input id="osvNext" name="osvNext" type="checkbox" {{ old('osvNext') ? 'checked' : '' }}>
                                                </div>
                                                <div>
                                                    <label for="osvEvakNext">ОСВ евак.</label>
                                                    <input id="osvEvakNext" name="osvEvakNext" type="checkbox" {{ old('osvEvakNext') ? 'checked' : '' }}>
                                                </div>
                                            </section>
                                            <section class="d-flex justify-content-start gap-3 flex-wrap">
                                                <div>
                                                    <label for="shNext">Шраб. среда</label>
                                                    <input id="shNext" name="shNext" type="checkbox" {{ old('shNext') ? 'checked' : '' }}>
                                                </div>
                                                <div>
                                                    <label for="shobSgrNext">Шоб. сгр.</label>
                                                    <input id="shobSgrNext" name="shobSgrNext" type="checkbox" {{ old('shobSgrNext') ? 'checked' : '' }}>
                                                </div>
                                                <div>
                                                    <label for="shOkolSrNext">Шокол. ср.</label>
                                                    <input id="shOkolSrNext" name="shOkolSrNext" type="checkbox" {{ old('shOkolSrNext') ? 'checked' : '' }}>
                                                </div>
                                                <div>
                                                    <label for="ventNext">Вент</label>
                                                    <input id="ventNext" name="ventNext" type="checkbox" {{ old('ventNext') ? 'checked' : '' }}>
                                                </div>
                                            </section>
                                            <section class="d-flex justify-content-start gap-3 flex-wrap">
                                                <div>
                                                    <label for="klimNext">Клим</label>
                                                    <input id="klimNext" name="klimNext" type="checkbox" {{ old('klimNext') ? 'checked' : '' }}>
                                                </div>
                                                <div>
                                                    <label for="f0Next">F-0</label>
                                                    <input id="f0Next" name="f0Next" type="checkbox" {{ old('f0Next') ? 'checked' : '' }}>
                                                </div>
                                                <div>
                                                    <label for="zNext">Z</label>
                                                    <input id="zNext" name="zNext" type="checkbox" {{ old('zNext') ? 'checked' : '' }}>
                                                </div>
                                                <div>
                                                    <label for="mNext">M</label>
                                                    <input id="mNext" name="mNext" type="checkbox" {{ old('mNext') ? 'checked' : '' }}>
                                                </div>
                                                <div>
                                                    <label for="izolNext">Изол</label>
                                                    <input id="izolNext" name="izolNext" type="checkbox" {{ old('izolNext') ? 'checked' : '' }}>
                                                </div>
                                                <div>
                                                    <label for="dtzNext">ДТЗ</label>
                                                    <input id="dtzNext" name="dtzNext" type="checkbox" {{ old('dtzNext') ? 'checked' : '' }}>
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
                                            <label for="invoice" class="fw-bold">Номер на фактура</label>
                                            <input type="text" id="invoice" name="invoice" class="form-control" value="{{ old('invoice') }}">
                                            <small id="invoiceError" class="text-danger"></small>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="invoice_date" class="fw-bold">Дата на фактура</label>
                                            <input type="date" id="invoice_date" name="invoice_date" class="form-control" value="{{ old('invoice_date') }}">
                                            <small id="invoice_dateError" class="text-danger"></small>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="payment_method" class="fw-bold">Начин на плащане</label>
                                            <select name="payment_method" id="payment_method" class="form-control">
                                                <option value="" class="form-control">Изберете начин на плащане</option>
                                                <option value="в брой" class="form-control" {{ old('payment_method') == 'в брой' ? 'selected' : '' }}>в брой </option>
                                                <option value="по банков път" class="form-control" {{ old('payment_method') == 'по банков път' ? 'selected' : '' }}>по банков път</option>
                                                <option value="с карта" class="form-control"{{ old('payment_method') == 'с карта' ? 'selected' : '' }}>с карта</option>
                                            </select>
                                            <small id="payment_methodError" class="text-danger"></small>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="price_without_vat" class="fw-bold">Сума без ДДС</label>
                                            <input type="number" id="price_without_vat" name="price_without_vat" class="form-control" onchange="fetchContragentData()" value="{{ old('price_without_vat') }}">
                                            <small id="price_without_vatError" class="text-danger"></small>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="contragent_client_id" class="fw-bold">Контрагент, предоставил контакта</label>
                                            <input type="text" name="contragent" id="contragent" onchange="fetchContragentData()" class="form-control" readonly />

                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="paid" class="fw-bold">Платено</label>
                                            <input type="checkbox" id="paid" name="paid" {{ old('paid') ? 'checked' : '' }}>
                                            <small id="paidError" class="text-danger"></small>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="contragent_sum" class = "fw-bold">% отстъпка за контрагент</label>
                                                <input id="contragent_sum" name="contragent_sum" type="text" class="form-control" readonly value="{{ old('contragent_sum') }}">
                                                <small id="contragent_sumError" class="text-danger"></small>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="total_sum" class="fw-bold">Реално постъпила сума без ДДС</label>
                                                <input id="total_sum" name="total_sum" type="text" class="form-control" value="{{ old('total_sum') }}">
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
                                <button type="submit" class="btn btn-success float-end">Добави</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let path = "{{ route('pages.tasks.action') }}";
        $('#client').typeahead({
            source: function(query, process) {
                return $.get(path, {
                    query: query
                }, function(data) {
                    return process(data);
                });
            }
        });

        function fetchClientData() {
            const clientName = document.getElementById('client').value;
            if (!clientName) return;

            fetch(`{{ route('pages.tasks.getData') }}?name=${encodeURIComponent(clientName)}`)
                .then(response => response.json())
                .then(data => {
                    const addressSelect = document.getElementById('client_address_1');
                    const contragentInput = document.getElementById('contragent');
                    const clientIdInput = document.getElementById('client_id');

                    // Clear existing options
                    addressSelect.innerHTML = '<option value="">Изберете обект</option>';

                    // Add new options based on the client's objects
                    data.objects.forEach(object => {
                        const option = document.createElement('option');
                        option.value = object.object;
                        option.textContent = object.object;
                        addressSelect.appendChild(option);
                    });

                    // Set client ID
                    clientIdInput.value = data.client_id;

                    // Set contragent
                    if (data.contragent_name) {
                        contragentInput.value = data.contragent_name;
                    } else {
                        contragentInput.value = '';
                    }
                })
                .catch(error => console.error('Error:', error));
        }

        function addAddressOption(selectElement, address, id) {
            const option = document.createElement('option');
            option.value = address;
            option.textContent = address;
            option.id = id;
            selectElement.appendChild(option);
        }

        function addContragentOption(selectElement, contragent_id, id) {
            const option = document.createElement('option');
            option.value = contragent_id;
            option.textContent = contragent_id;
            option.id = id;
            selectElement.appendChild(option)
        }

        function fetchContragentData() {
            const contragentName = document.getElementById('contragent').value;
            if (!contragentName) return;
            const priceNoVAT = parseFloat(document.getElementById('price_without_vat').value) || 0;

            fetch(`{{ route('pages.tasks.getContragentData') }}?name=${encodeURIComponent(contragentName)}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    const commissionPercentage = data.commission_percentage || 0;
                    document.getElementById('contragent_sum').value = commissionPercentage;

                    const totalSum = commissionPercentage === 0 ?
                        priceNoVAT :
                        priceNoVAT - (priceNoVAT * (commissionPercentage / 100));

                    document.getElementById('total_sum').value = totalSum.toFixed(2);
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred while fetching contragent data. Please try again.');
                });
        }

        $(document).ready(function() {
            // Get the wayOfShowingDocumentation dropdown element
            var wayOfShowingDocumentationDropdown = $('#wayOfShowingDocumentation');

            // Get the courrierDetails div element
            var courrierDetailsDiv = $('#courrierDetails');

            // Listen for changes in the wayOfShowingDocumentation dropdown
            wayOfShowingDocumentationDropdown.on('change', function() {
                // Check if the selected option is "По куриер"
                if ($(this).val() === 'По куриер') {
                    // Show the courrierDetails div
                    courrierDetailsDiv.show();
                } else {
                    // Hide the courrierDetails div
                    courrierDetailsDiv.hide();
                }
            });

            // Trigger the change event initially to set the visibility based on the selected option
            wayOfShowingDocumentationDropdown.trigger('change');
        });
    </script>
@endsection
