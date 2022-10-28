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
    <nav class="navbar navbar-expand-lg p-3" style="background-color: #f7f7f7;">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{route('etudiant.index')}}">YBSN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('etudiant.index')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-primary" aria-current="page" href="{{route('etudiant.create')}}">Add a student</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <footer class="py-2 sticky-bottom mt-5" style="background-color: #f7f7f7;">
        <div class="container text-center">
            <p><small>Copyright &copy; YBSN - 2022</small></p>
        </div>
    </footer>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>