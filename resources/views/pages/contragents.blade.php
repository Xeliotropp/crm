<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CRM</title>

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- Styles -->

</head>


<form action="" method="post">
    <div class="row">
        <div class="col-md-14 mt-4">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Клиент - Име на фирмата</th>
                                <th>ЕИК</th>
                                <th>Лице за Контакт</th>
                                <th>Телефон</th>
                                <th>Адрес</th>
                                <th>Допълнителна информация</th>
                                <th>Обект</th>

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
                            </tr>
                            <!--@ endforeach-->
                        </tbody>
                    </table>
                    <div>
                        <!--{ { $categories->links() } }-->
                    </div>
                    <button class="btn btn-primary" id="add">Добави нов</button>
                </div>
            </div>
        </div>
    </div>
</form>
