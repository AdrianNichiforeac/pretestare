<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('guest.index') }}">
                    <img src="{{ asset('assets/images/logotip.png') }}" alt="Logo" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active text-black" aria-current="page" href="#">Despre</a>
                        <a class="nav-link active text-black" href="#">Produse metodice</a>
                        <a class="nav-link active text-black" href="#">Exemple de lucrari</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    @yield('content')

    <footer class="mt-5 p-5 text-black d-flex align-center justify-content-center bg-card">
        <p class="my-5">
            &copy; {{ \Carbon\Carbon::now()->year }} Pretestraea era super
        </p>
    </footer>
</body>
</html>
