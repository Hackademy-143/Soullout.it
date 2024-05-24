<nav class="navbar navbar-expand-lg fixed-top w-75 mx-auto">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('welcome')}}">Soullout <i class="fa-solid fa-house"></i> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                {{-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('welcome') }}"> Home </a>
                </li> --}}
                <li>
                    <a class="nav-link active" aria-current="page" href="{{ route('prodottiShow') }}">{{ __('ui.nav1') }} </a>
                </li>
                {{-- categorie --}}
                <li class=" nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="categoriesDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">{{ __('ui.nav2') }} </a>
                    <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                        @foreach ($categories as $category)
                            <li><a href="{{ route('categoryShow', compact('category')) }}"
                                    class="dropdown-item">{{ $category->categoria }}</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        @endforeach
                    </ul>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('ui.login') }} </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('ui.register') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Ciao , {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{ route('article.create') }}">Inserisci il tuo prodotto</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="">Items</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="">Feedback</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
                            </li>
                            <form action="{{ route('logout') }}" method="POST" id="logout-form" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                    @auth
                        @if (Auth::user()->is_revisor)
                            <li class="nav-item">
                                <a class="nav-link btn btn-outline-success btn-sm position-relative w-sm-25"
                                    href="{{ route('revisor.index') }}">Zona Revisore <span
                                    class="position-absolute right-100 translate-middle-end badge rounded-pill bg-danger">{{ \App\Models\Article::toBeRevisedCount()}}</span></a>
                            </li>
                        @endif
                    @endauth
                @endguest
            </ul>
        </div>
        <form class="d-flex" role="search" action="{{ route('article.search') }}" metheod="GET">
            <div class="input-group">
                <input class="form-control inputpers" name="query" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success input-group-text" type="submit"
                    id="basic-addon2"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <x-_locale lang="it"/>
        <x-_locale lang="en"/>
        <x-_locale lang="es"/>
    </div>
</nav>
