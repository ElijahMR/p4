<ul class='navbar-nav ml-md-auto'>
    @foreach(config('app.nav'.Auth::check()) as $link => $label)
        <li class='nav-item'><a href='{{ $link }}' class='nav-link {{ Request::is(substr($link, 1)) ? 'active' : '' }}'>{{ $label }}</a>
    @endforeach

    @if(Auth::check())
        <li class='nav-item'>
            <form method='POST' id='logout' action='/logout'>
                {{ csrf_field() }}
                <a class='nav-link'href='#' onClick='document.getElementById("logout").submit();'>Logout</a>
            </form>
        </li>
    @endif
</ul>