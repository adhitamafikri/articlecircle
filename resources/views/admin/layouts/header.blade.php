<!-- header -->
<nav id="header" class="navbar navbar-inverse fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <div class="navbar-brand">Article Circle</div>
        </div>
        <!-- left part of nav bar -->
        <ul class="nav navbar-nav">
            <li><a href="/admin/categories">Articles Categories</a></li>
            <li><a href="/admin/scrape">Scrape Articles</a></li>
        </ul>

        <!-- right part of nav bar -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                 @elseif (Auth::user()->is('Member') OR Auth::user()->is('Author'))
                    <li><a href="">Hello, {{ Auth::user()->name }}</a></li>
                    <li><a href="{{ url('/logout') }}">Logout</a></li>
                 @endif -->
              <!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>