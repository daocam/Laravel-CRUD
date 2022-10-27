<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Daouda CAMARA">
    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"
    rel="stylesheet">
    <style> body { font-family: 'Nunito';} </style>
    <title>{{ config('app.name') }}</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #f7f7f7;">
        <div class="container">
            <a class="navbar-brand" href="{{route('etudiant.index')}}">YBSN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('etudiant.index')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">My Network</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search member" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Go</button>
                </form>
            </div>
        </div>
    </nav>
    @yield('content')
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>