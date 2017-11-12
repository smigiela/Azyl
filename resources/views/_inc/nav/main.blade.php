    <nav class="navbar has-shadow">
    <div class="container">
        <div class="navbar-start">
            <a class="navbar-item" href="{{url('/')}}">
                <img src="{{asset('images/logo.png')}}" style="height: 40px; width: 200px;" alt="Schronisko" />
            </a>
            <a href="#" class="navbar-item is-tab is-hiden-mobile m-l-10">O nas</a>
            <a href="#" class="navbar-item is-tab is-hiden-mobile">Adoptuj</a>
            <a href="#" class="navbar-item is-tab is-hiden-mobile">Kontakt</a>
        </div>

        <div class="navbar-end" style="overflow: visible;">
            @if (Auth::guest())
                <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>    
                <a href="{{route('register')}}" class="navbar-item is-tab">Rejestracja</a>    
            @else
                <div class="dropdown is-aligned-right navbar-item is-tab">
                    Witaj {{ Auth::user()->name }} <span class="icon"><i class="fa fa-caret-down"></i></span>
                    <ul class="dropdown-menu ">
                        <li><a class="navbar-item" href="#"><span class="icon"><i class="fa fa-fw fa-user-circle"></i></span>Profil</a></li>
                        <li><a class="navbar-item" href="#"><span class="icon"><i class="fa fa-fw fa-bell"></i></span>Powiadomienia</a></li>
                        <li><a class="navbar-item" href="{{route('manage.dashboard')}}"><span class="icon"><i class="fa fa-fw fa-cog"></i></span>Zarządzanie</a></li>
                        <li class="separator"></li>
                        <li><a class="navbar-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <span class="icon"><i class="fa fa-fw fa-sign-out"></i></span>Wyloguj</a> </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form></li>
                    </ul>
                </div>               
            @endif
        </div>
    </div>
</nav> 