<nav class="navbar navbar-expand-lg navbar-primary bg-primary sticky-top">
    <div class="container">
        @auth
            <a class="navbar-brand text-white" href="/admin/produk">Admin</a>
            @else
            <a class="navbar-brand text-white" href="/">Test Junior Programmer</a>
        @endauth
      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
         @auth
            <li class="nav-item dropdown ">
             <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 {{Auth::user()->name}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                        <a class="dropdown-item" href="{{route("auth.logout")}}">Logout</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="/admin/produk">Produk</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="/">Home</a>
              </li>
            <li class="nav-item">
              <a class="nav-link text-white" aria-current="page" href="/login">Login</a>
            </li>
         @endauth
        </ul>
      </div>
    </div>
</nav>