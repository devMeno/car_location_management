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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    {{-- <script src="{{ asset('images/script.js') }}"></script> --}}
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .bg-image {
            /* Définissez l'image de fond avec la propriété background-image */
            background-image: url();
            /* Ajustez d'autres propriétés CSS selon vos besoins */
            background-size: cover;
            background-position: center;
            height: 300px;
            /* Ajustez la hauteur selon vos besoins */
        }

        .bg-colorg {
            background-color: whitesmoke
        }

        .btn-green {
            background-color: rgb(175, 213, 118);
            color: white
        }

        .footer {
            background-color: rgb(37, 37, 37);
            color: white
        }

        .color {
            background-color: rgb(204, 243, 146)
        }

        .color:hover {
            background-color: rgb(185, 235, 110)
        }

        .black {
            background-color: rgb(205, 207, 203)
        }

        .navbtn {
            color: black
        }

        .navbtn:hover {
            color: white
        }
    </style>
    <title>@yield('title') | Agence</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg " style="background-color: white">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Vehicles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li> --}}
                </ul>
                {{-- <div class="dropdown">
                    <a data-mdb-dropdown-init class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                        id="navbarDropdownMenuAvatar" role="button" aria-expanded="false">
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="25"
                            alt="Black and White Portrait of a Man" loading="lazy" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                        <li>
                            <a class="dropdown-item" href="#">My profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Settings</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Logout</a>
                        </li>
                    </ul>
                </div> --}}
                <div class="navbar-nav">
                    @auth
                        <span class="navbar-brand">
                            {{ Auth::user()->name }}
                        </span>
                        <form action="{{ route('auth.logout') }}" method="POST">
                            @method('delete')
                            @csrf

                            <button type="submit" class="btn btn-outline-primary">Logout</button>
                        </form>
                    @endauth
                    @guest
                        <button type="button" class="btn btn-outline-dark">
                            <a href="{{ route('auth.login') }}" class="text-decoration-none navbtn px-4">Login</a>
                        </button>
                    @endguest
                </div>
                {{-- <button type="button" class="btn btn-outline-primary">Primary</button> --}}
            </div>
        </div>
    </nav>
    @yield('content')

</body>

</html>
