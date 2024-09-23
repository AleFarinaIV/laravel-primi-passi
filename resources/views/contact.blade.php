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

    <header class="bg-primary">
        <div class="container py-4">
            <div class="row">
                <div class="col-12">
                    <ul class="list-unstyled d-flex m-0">
                        <li class="me-4"><a class="text-decoration-none text-dark fw-semibold" href="{{ route('homepage') }}">Home</a></li>
                        <li class="me-4"><a class="text-decoration-none text-dark fw-semibold" href="{{ route('about') }}">About</a></li>
                        <li class="me-4"><a class="text-decoration-none text-dark fw-semibold" href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main>

        <div class="container py-4">
            <div class="row text-center">
                <div class="col-12">
                    <h1>{{ $message }}</h1>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-12">
                    <h5 class="pb-5">{{ $could_contact_message }}</h5>
                    <div class="row">
                        @foreach ($contact_array as $contact)
                            <div class="col-3">
                                <ul class="list-unstyled">
                                    <h3>{{ $contact['name']}}</h3>
                                    <li>{{ $contact['phone'] }}</li>
                                    <li>{{ $contact['email'] }}</li>
                                    <li>{{ $contact['address'] }}</li>
                                </ul>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </main>

</body>

</html>
