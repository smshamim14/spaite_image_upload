<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spaite Midea Library</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $item)
                                    <tr>
                                        <th> {{ $loop->iteration }} </th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->status == 1 ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <img style="width: 200px; height:80px"
                                                src="{{ $item->getFirstMediaUrl('photo') }}" alt="{{ $item->name }}">

                                        </td>
                                        <td class="d-inline-flex">
                                            <a href="{{ route('categories.edit', $item->id) }}">
                                                <button class="btn btn-sm btn-warning me-2"><i
                                                        class="fa-solid fa-pen-to-square"></i></button>
                                            </a>
                                            {!! Form::open() !!}
                                            {!! Form::button('<i class="fa-solid fa-trash"></i>', ['class' => 'btn btn-sm btn-danger', 'type' => 'submit']) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
