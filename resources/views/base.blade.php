<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .navbtn {
            color: black
        }

        .navbtn:hover {
            color: white
        }
    </style>
    <title>@yield('title') | Administration</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light " style="background-color: white">
        <div class="container">
            <a class="navbar-brand fw-bolder" href="#">Carlux Administration</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">All Cars</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Rented list</a>
                    </li>
                </ul>
                <div class="navbar-nav">
                    @auth
                        <span class="navbar-brand">
                            {{-- {{ Auth::user()->name }} --}}
                            {{-- {{ Auth::admin()->name }} --}}
                            Bonjour
                        </span>
                        <form action="{{ route('auth.adminlogout') }}" method="POST">
                            @method('delete')
                            @csrf

                            <button type="submit" class="btn btn-outline-primary">Logout</button>
                        </form>
                    @endauth
                    @guest
                        <button type="button" class="btn btn-outline-dark">
                            <a href="{{ route('auth.adminlogin') }}" class="text-decoration-none navbtn px-4">Login</a>
                        </button>
                    @endguest
                </div>
                {{-- <button type="button" class="btn btn-outline-primary">Primary</button> --}}
            </div>
        </div>
    </nav>
    <div class="mx-3 mt-5">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>
</body>

</html>
