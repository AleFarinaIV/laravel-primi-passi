<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <header class="bg-danger">
        <div class="container py-4">
            <div class="row">
                <div class="col-12">
                    <ul class="list-unstyled d-flex m-0">
                        <li class="me-4"><a class="text-decoration-none text-dark fw-semibold"
                                href="{{ route('homepage') }}">Home</a></li>
                        <li class="me-4"><a class="text-decoration-none text-dark fw-semibold"
                                href="{{ route('about') }}">About</a></li>
                        <li class="me-4"><a class="text-decoration-none text-dark fw-semibold"
                                href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main>

        <div class="container text-center py-4">
            <div class="row">
                <div class="col-12">
                    <h1>{{ $message }}</h1>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-12">
                    <h5 class="pb-5">{{ $who_are_message }}</h5>
                    <div class="row">
                        @foreach ($about_array as $about)
                            <div class="col-6 d-flex justify-content-center">
                                <div class="card" style="width: 36rem;">
                                    <img src="{{ url($about['img_path']) }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text px-3">
                                            {{ $about['description'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </main>

</body>

</html>
