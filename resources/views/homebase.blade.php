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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .bg-image {
            /* Définissez l'image de fond avec la propriété background-image */
            background-image: url('/public/images/banner2.jpg');
            /* Ajustez d'autres propriétés CSS selon vos besoins */
            background-size: cover;
            background-position: center;
            height: 300px;
            /* Ajustez la hauteur selon vos besoins */
        }

        .bg-colorg {
            background-color: rgb(243, 254, 226)
        }

        .btn-green {
            background-color: rgb(175, 213, 118);
            color: white
        }
    </style>
    <title>@yield('title') | Agence</title>
</head>

<body>
    @yield('content')

</body>

</html>
