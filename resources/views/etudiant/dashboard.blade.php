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
    @php $locale = session()->get('locale'); @endphp
    <nav class="navbar navbar-expand-lg p-3" style="background-color: #f7f7f7;">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="{{route('etudiant.index')}}">YBSN</a>
            <a class="navbar-brand">Hello {{ $name }} !</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                @guest
                    <a class="nav-link" href="{{route('user.registration')}}">@lang('lang.registration')</a>
                    <a class="nav-link" href="{{route('login')}}">@lang('lang.login')</a>
                @else
                    <a class="nav-link" href="{{route('etudiant.index')}}">@lang('lang.students')</a>
                    <a class="nav-link" href="{{route('etudiant.create')}}">@lang('lang.new_student')</a>
                    <a class="nav-link" href="{{route('document.upload')}}">@lang('lang.upload_file')</a>
                    <a class="nav-link" href="{{route('document.index')}}">@lang('lang.document')</a>
                    <a class="nav-link" href="{{route('article.index')}}">@lang('lang.article')</a>
                    <a class="nav-link" href="{{route('article.create')}}">@lang('lang.new_article')</a>
                    <a class="nav-link" href="{{route('logout')}}">@lang('lang.logout')</a>
                @endguest
                    <a class="nav-link @if($locale == 'en') text-primary @endif" href="{{route('lang', 'en')}}">EN</a>
                    <a class="nav-link @if($locale == 'fr') text-primary @endif" href="{{route('lang', 'fr')}}">FR</a>
            </div>
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