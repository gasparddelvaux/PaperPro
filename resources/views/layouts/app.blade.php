<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-paperpro">
        <div class="container">
            <a class="navbar-brand" href="/">PaperPro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Se connecter</a>
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">S'enregistrer</a>
                            </li>
                        @endif
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="/home">Accueil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Documents
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/documents">Documents</a></li>
                            <li><a class="dropdown-item" href="/documenttypes">Types de documents</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/products">Produits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/customers">Clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/users">Utilisateurs</a>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="nav-link" style="border: none; background: none; cursor: pointer;">Se déconnecter</button>
                        </form>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4" id="main-container">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show my-4" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @yield('content')
    </div>
    <footer class="d-flex flex-wrap justify-content-between align-items-center px-4 py-2 mt-4 border-top">
        <p class="col-md-4 mb-0 text-body-secondary">© 2023 PaperPro par Gaspard Delvaux</p>
        <h3 class="text-logo">PaperPro</h3>
        <ul class="nav col-md-4 justify-content-end">
            @guest
                @if (Route::has('login'))
                    <li class="nav-item"><a class="nav-link px-2 text-body-secondary" href="{{ route('login') }}">Se connecter</a></li>
                @endif
                @if (Route::has('register'))
                    <li class="nav-item"><a class="nav-link px-2 text-body-secondary" href="{{ route('register') }}">S'enregistrer</a></li>
                @endif
            @else
                <li class="nav-item"><a class="nav-link px-2 text-body-secondary" href="/home">Accueil</a></li>
                <li class="nav-item"><a class="nav-link px-2 text-body-secondary" href="/documents">Documents</a></li>
                <li class="nav-item"><a class="nav-link px-2 text-body-secondary" href="/products">Produits</a></li>
                <li class="nav-item"><a class="nav-link px-2 text-body-secondary" href="/customers">Clients</a></li>
                <li class="nav-item"><a class="nav-link px-2 text-body-secondary" href="/users">Utilisateurs</a></li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="nav-link px-2 text-body-secondary" style="border: none; background: none; cursor: pointer;">Se déconnecter</button>
                    </form>
                </li>
            @endguest
        </ul>
    </footer>
</body>
<script src="/js/bootstrap.bundle.js"></script>
<script src="/js/app.js"></script>
</html>
