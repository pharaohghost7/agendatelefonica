<div class="container-fluid ">
    <nav class="navbar navbar-light">
        <a class="navbar-brand" href="{{ route('agenda.index') }}"><img id="icono" class="img-responsive" src="{{ asset('img/phone.png') }}"  alt=""></a>
        <ul class="nav flex-column text-center">
            <li class="nav-item">
                <span class="nav-link active"> Bienvenido  {{ Auth::user()->name }}</span>
            </li>
            <li class="nav-item">
                <div class="nav-link" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        Cerrar sesión
                    </a>
                
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
            </li>
        </ul>
    </nav>
</div>

