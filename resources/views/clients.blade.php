<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CRM</title>

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Styles -->

</head>


<div class="row">
    <div class="col-md-14">
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ЕИК</th>
                            <th>Клиент</th>
                            <th>Контакт</th>
                            <th>Обект</th>
                            <th>Контрагент</th>
                            <th>Вид измерване</th>
                            <th>Цена без ДДС</th>
                            <th>Плащане</th>
                            <th>Получаване</th>
                            <th>Сертфикат</th>
                            <th>Платено ДА/НЕ</th>
                            <th>Фактура № / дата</th>
                            <th>Комисионна</th>

                        </tr>
                    </thead>
                    <tbody>
                        <!-- @ foreach ($categories as $category) -->
                            <tr>
                                <td>' { { $category->id } }' </td>
                                <td>' { { $category->name } }' </td>
                                <td>' { { $category->slug } }' </td>
                                <td>' { { $category->description } }' </td>
                                <td>'{ { $category->status == '1' ? 'Hidden' : 'Visible' } }'</td>
                                <td>'{ { $category->status == '1' ? 'Hidden' : 'Visible' } }'</td>
                                <td>'{ { $category->status == '1' ? 'Hidden' : 'Visible' } }'</td>
                                <td>'{ { $category->status == '1' ? 'Hidden' : 'Visible' } }'</td>
                                <td>'{ { $category->status == '1' ? 'Hidden' : 'Visible' } }'</td>
                                <td>'{ { $category->status == '1' ? 'Hidden' : 'Visible' } }'</td>
                                <td>'{ { $category->status == '1' ? 'Hidden' : 'Visible' } }'</td>
                                <td>'{ { $category->status == '1' ? 'Hidden' : 'Visible' } }'</td>
                                <td>'{ { $category->status == '1' ? 'Hidden' : 'Visible' } }'</td>
                                
                            </tr>
                        <!--@ endforeach-->
                    </tbody>
                </table>
                <div>
                    <!--{ { $categories->links() } }-->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
