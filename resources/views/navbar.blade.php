<head>
    <link rel="stylesheet" href="{{ URL::asset('css/master.css') }}">
</head>
<nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: lightblue;">


    <a class="navbar-brand" >Bienvenido
        @if(Auth::user())
            {{ Auth::user()->name }}
        @endif

</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03" style="color: white">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0" >
            @if(Auth::user())
                @if(Auth::user()->usertype == 'Dentista')
                    <li class="nav-item" >
                        <a class="nav-link" href="/dentists/create">Crear dentista nuevo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/patients/create">Crear paciente nuevo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/appointments/show">Ver citas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dentists">Ver pacientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/users/logout">Cerrar sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/users/delete">Eliminar cuenta</a>
                    </li>
                @endif
            @else
                <li class="nav-item">
                    <a class="nav-link" href="/users/login">Iniciar sesión</a>
                </li>
            @endif

        </ul>

    </div>
</nav>

