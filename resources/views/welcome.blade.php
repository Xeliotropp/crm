<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CRM</title>

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Styles -->

</head>

<body>
    <div class="container create pt-3 pb-3">
        <form>
            <div class="form-group row">
                <label for="eik" class="col-sm-2 col-form-label">ЕИК</label>
                <div class="col-sm-4">
                    <input type="text" class="fields" id="eik">
                </div>
                <label for="companyName" class="col-sm-2 col-form-label">Име на фирма</label>
                <div class="col-sm-4">
                    <input type="text" class="fields" id="companyName">
                </div>
            </div>
            <div class="form-group row">
                <label for="contactPerson" class="col-sm-2 col-form-label">Лице за контакт</label>
                <div class="col-sm-4">
                    <input type="text" class="fields" id="contactPerson">
                </div>
                <label for="additionalInfo" class="col-sm-2 col-form-label">Допълнителна информация</label>
                <div class="col-sm-4">
                    <input type="text" class="fields" id="additionalInfo">
                </div>
            </div>
        </form>
            <fieldset class="border p-2">
                <legend class="w-auto">Обект</legend>
                <div class="form-group row">
                    <label for="objectName" class="col-sm-2 col-form-label">Име на обекта</label>
                    <div class="col-sm-4">
                        <input type="text" class="fields" id="objectName">
                    </div>
                    <label for="objectAddress" class="col-sm-2 col-form-label">Адрес на обекта</label>
                    <div class="col-sm-4">
                        <input type="text" class="fields" id="objectAddress">
                    </div>
                </div>
                <hr>
                <div class="form-group row mt-3">
                    <div class="col-sm-2">Параметри за измерване</div>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="param1" value="option1">
                            <label class="form-check-label" for="param1">MK</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="param2" value="option2">
                            <label class="form-check-label" for="param2">ОСВ</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="param3" value="option3">
                            <label class="form-check-label" for="param3">Ш</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="param4" value="option4">
                            <label class="form-check-label" for="param4">Вент</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="param5" value="option5">
                            <label class="form-check-label" for="param5">Клим</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="param6" value="option6">
                            <label class="form-check-label" for="param6">F-0</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="param7" value="option7">
                            <label class="form-check-label" for="param7">Z</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="param18" value="option18">
                            <label class="form-check-label" for="param8">MK</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="param9" value="option9">
                            <label class="form-check-label" for="param9">M</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="param10" value="option10">
                            <label class="form-check-label" for="param10">Изол</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="param11" value="option11">
                            <label class="form-check-label" for="param11">ДТЗ</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="measurementDate" class="col-sm-2 col-form-label">Дата на измерване</label>
                    <div class="col-sm-4">
                        <input type="date" class="fields" id="measurementDate">
                    </div>
                    <label for="receiveBy" class="col-sm-2 col-form-label">ReceiveBy</label>
                    <div class="col-sm-4">
                        <input type="text" class="fields" id="receiveBy">
                    </div>
                </div>
                <hr>
                <div class="form-group row mt-3">
                    <div class="col-sm-2">Следващо измерване</div>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="param1" value="option1">
                            <label class="form-check-label" for="param1">MK</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="param2" value="option2">
                            <label class="form-check-label" for="param2">ОСВ</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="param3" value="option3">
                            <label class="form-check-label" for="param3">Ш</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="param4" value="option4">
                            <label class="form-check-label" for="param4">Вент</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="param5" value="option5">
                            <label class="form-check-label" for="param5">Клим</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="param6" value="option6">
                            <label class="form-check-label" for="param6">F-0</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="param7" value="option7">
                            <label class="form-check-label" for="param7">Z</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="param18" value="option18">
                            <label class="form-check-label" for="param8">MK</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="param9" value="option9">
                            <label class="form-check-label" for="param9">M</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="param10" value="option10">
                            <label class="form-check-label" for="param10">Изол</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="param11" value="option11">
                            <label class="form-check-label" for="param11">ДТЗ</label>
                        </div>
                        <!-- Add remaining checkboxes similarly -->
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nextMeasurementDate" class="col-sm-2 col-form-label">Дата на следващо измерване</label>
                    <div class="col-sm-4">
                        <input type="date" class="fields" id="nextMeasurementDate">
                    </div>
                    <label for="remindOn" class="col-sm-2 col-form-label">Напомняне на:</label>
                    <div class="col-sm-4">
                        <input type="date" class="fields" id="remindOn">
                    </div>
                </div>
                <hr>
                <div class="form-group row mt-3">
                    <label for="certificateNumber" class="col-sm-2 col-form-label">№ на сертификат</label>
                    <div class="col-sm-4">
                        <input type="text" class="fields" id="certificateNumber">
                    </div>
                    <label for="certificateDate" class="col-sm-2 col-form-label">Дата на сертификат</label>
                    <div class="col-sm-4">
                        <input type="date" class="fields" id="certificateDate">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="contractor" class="col-sm-2 col-form-label">Контрагент</label>
                    <div class="col-sm-10">
                        <input type="text" class="fields" id="contractor">
                    </div>
                </div>
                <div class="center">
                    <button type="button" class="btn btn-dark">Add new object</button>
                </div>
            </fieldset>

            <fieldset class="border p-2 mt-4">
                <legend class="w-auto">Плащане</legend>
                <div class="form-group row">
                    <label for="paymentMethod" class="col-sm-2 col-form-label">Начин на плащане</label>
                    <div class="col-sm-4">
                        <select class="fields" id="paymentMethod">
                            <option>По банков път</option>
                            <option>В брой</option>
                        </select>
                    </div>
                    <label for="amountWithoutVAT" class="col-sm-2 col-form-label">Сума без ДДС</label>
                    <div class="col-sm-4">
                        <input type="text" class="fields" id="amountWithoutVAT">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="invoiceNumber" class="col-sm-2 col-form-label">Номер на фактура</label>
                    <div class="col-sm-4">
                        <input type="text" class="fields" id="invoiceNumber">
                    </div>
                    <label for="invoiceDate" class="col-sm-2 col-form-label">Дата на фактура</label>
                    <div class="col-sm-4">
                        <input type="date" class="fields" id="invoiceDate">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="paid" class="col-sm-2 col-form-label">Платено</label>
                    <div class="col-sm-4">
                        <select class="fields" id="paid">
                            <option>Да</option>
                            <option>Не</option>
                        </select>
                    </div>
                </div>
                <div class="center">
                    <button type="button" class="btn btn-dark center">Add new entry</button>
                </div>
            </fieldset>

            <div class="form-group row mt-4">
                <label for="totalAmount" class="col-sm-2 col-form-label">Сума за контрагент</label>
                <div class="col-sm-4">
                    <input type="text" class="fields" id="totalAmount">
                </div>
                <label for="cashAmountWithoutVAT" class="col-sm-2 col-form-label">Сума в брой без ДДС</label>
                <div class="col-sm-4">
                    <input type="text" class="fields" id="cashAmountWithoutVAT">
                </div>
            </div>
            <div class="form-group row">
                <label for="bankAmountWithoutVAT" class="col-sm-2 col-form-label">Сума в банка без ДДС</label>
                <div class="col-sm-4">
                    <input type="text" class="fields" id="bankAmountWithoutVAT">
                </div>
                <label for="receivedAmountWithoutVAT" class="col-sm-2 col-form-label">Реално постъпила сума без ДДС</label>
                <div class="col-sm-4">
                    <input type="text" class="fields" id="receivedAmountWithoutVAT">
                </div>
            </div>
        </form>
    </div>
</body>

</html>
