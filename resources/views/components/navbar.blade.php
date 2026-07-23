@props(['categories'])

<header class="site-header">
    <a class="brand" href="{{ route('home') }}">Presto</a>

    <nav class="nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Categorie
            </a>
            <ul class="dropdown-menu">
                @foreach ($categories as $category)
                    <li><a class="dropdown-item text-capitalize"
                            href="{{ route('byCategory', compact('category')) }}">{{ $category->name }}</a>
                    </li>
                    @if (!$loop->last)
                        <hr class="dropdown-divider">
                    @endif
                @endforeach
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" ariacurrent="page" href="{{ route('article.index') }}">Articoli</a>
        </li>
        </li>

        <a href="{{ route('articles.create') }}">Inserisci annuncio</a>

        @auth
            <span class="auth-status">Sei loggato</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="link-button">Logout</button>
            </form>
        @else
            <span class="auth-status">Effettua la registrazione</span>
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Registrati</a>
        @endauth
    </nav>
</header>
