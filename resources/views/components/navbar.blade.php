<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('books.index') }}">Books</a>
                </li>
                @guest

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Auth
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/login">Login</a></li>
                            <li><a class="dropdown-item" href= "/register">Register</a></li>

                        </ul>
                    </li>
                @endguest
                @Auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('books.create') }}">Aggiungi libro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('User.books') }}">I tuoi libri</a>
                    </li>
                    <li class="nav-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="btn" type="submit">Logout</button>
                        </form>
                    </li>
                @endauth

            </ul>

        </div>
    </div>
</nav>
