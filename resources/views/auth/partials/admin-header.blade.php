<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">{{env('APP_NAME')}} Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('boxes')}}">Mystery Boxes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('items')}}">Items</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('price.list')}}">Price Lists</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('box.categories')}}">Categories</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('badges')}}">Badges</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" style="color: red" href="{{route('badges')}}">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
