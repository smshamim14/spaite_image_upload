<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spaite Midea Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="{{ route('categories.index') }}">Categories</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ route('categories.create') }}">Add Category</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header">Category Crate</div>
                    <div class="card-body">
                        {!! Form::model($category, ['route' => ['categories.update', $category], 'method' => 'put', 'files' => 'true']) !!}
                        <div class="row">
                            <div class="col-lg-6">
                                {!! Form::label('name', 'Name') !!}
                                {!! Form::text('name', null, ['class' => 'form-control form-control-sm']) !!}
                            </div>
                            <div class="col-lg-6">
                                {!! Form::label('name', 'Name') !!}
                                {!! Form::select('status', [1 => 'Active', 2 => 'Inactive'], null, ['class' => 'form-control form-control-sm']) !!}
                            </div>
                            <div class="col-lg-12 mt-4">
                                {!! Form::label('photo', 'Photo') !!}
                                {!! Form::file('photo', ['class' => 'form-control form-control-sm']) !!}

                            </div>
                        </div>
                        {!! Form::button('update category', ['class' => 'btn btn-sm btn-success mt-4', 'type' => 'submit']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
