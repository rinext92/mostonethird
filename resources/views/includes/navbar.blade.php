<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
    <a class="navbar-brand" href="#">Start Bootstrap</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="{{ Request::path() == '/' ? 'nav-item active' : '' }}">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="{{ Request::path() == '/about' ? 'nav-item active' : '' }}">
                <a class="nav-link" href="#">About</a>
            </li>
            <!-- <li class="{{ Request::path() == '/services' ? 'nav-item active' : '' }}">
                <a class="nav-link" href="#">Services</a>
            </li> -->
            <li class="{{ Request::path() == '/contact' ? 'nav-item active' : '' }}">
                <a class="nav-link" href="#">Contact</a>
            </li>
            @if(Auth::user())
                @if(Auth::user()->role == 1)
                    <li class="{{ Request::path() == '/user' ? 'nav-item active' : '' }}">
                        <a class="nav-link" href="{{ url('/admin/user') }}">User</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Post</a>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url('/admin/post') }}">List Post</a>
                        <a class="dropdown-item" href="{{ url('/admin/post/create') }}">Create Post</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/log') }}">Logs</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Login</a>
                </li>
            @endif
        </ul>
    </div>
    </div>
</nav>