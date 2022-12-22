<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <title>Soft Delete in Laravel</title>
</head>

<body>
    <div id="viewport">
        <div id="sidebar">
            <header>
                <A href="#">My App</a>
            </header>
            <ul>
                <li class="nav"><a class="btn btn-default m-2" href="/"><i
                            class="fa fa-thin fa-newspaper"></i>Article</a></li>
                <li class="nav"><a class="btn btn-default m-2" href="trashed"><i
                            class="fa fa-duotone fa-trash"></i>Trashed</a></li>
            </ul>
        </div>

        {{-- content --}}
        <div class="container-fluid">
            <h1 class="text-center text-danger py-4">Restore Articles</h1>
            <table class="table">
                <h3> <a class="btn btn-success" href="restoreAll"><i class="fa fa-sharp fa-solid fa-trash"></i>Restore
                        All</a>
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Author</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Restore</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($article as $art)
                            <tr>
                                <th scope="row">{{ $art->id }}</th>
                                <td>{{ $art->author }}</td>
                                <td>{{ $art->title }}</td>
                                <td>{{ subStr($art->description, 0, 30) }}</td>
                                <td>
                                    <a href="restore/{{ $art->id }}" class="text-warning btn"><i
                                            class="bi bi-trash-fill"></i> Restore</a>
                            </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
