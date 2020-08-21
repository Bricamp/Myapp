

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="navbar-brand">
        {{ Auth::user()->name }}
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href={{ route('home') }} >Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href={{ route('viewposts') }}>Blog</a>
            </li>

            @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href={{ route('formpost') }}>Crear Post</a>
                </li>
            @endif
        </ul>

        @if(Auth::check())
            <span class="navbar-text">
                <a class="nav-link" href={{  route('logout') }}>Log out</a>
            </span>
        @else
            <span class="navbar-text">
                <a class="nav-link" href={{  route('register') }}>Registrarse</a>
            </span>

            <span class="navbar-text">
                <a class="nav-link" href={{  route('login') }}>Log in</a>
            </span>
        @endif
    </div>
</nav>
