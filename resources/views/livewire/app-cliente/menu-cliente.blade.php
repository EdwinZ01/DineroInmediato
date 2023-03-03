<div>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/assets/aplicacionCliente/Grupo 24.png') }}" width="150" class=""
                    style="margin-left: 20px; margin-top: 20px; margin-bottom: 20px;" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 100px;">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!---MIO-->
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('miPrestamo') ? 'active'  : null}}" aria-current="page" href="{{ route('miPrestamo') }}">
                            <img class="m-1" src="{{ asset('img/assets/aplicacionCliente/Grupo 946.png') }}"
                                alt="">
                            &nbsp;Mi préstamo
                        </a>
                    </li>

                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle {{Request::is(Request::path()) ? 'oscuro'  : null}}" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false" >
                                <img class="m-1" src="{{ asset('img/assets/aplicacionCliente/Grupo 262.png') }}"
                                    alt="">
                                    &nbsp;&nbsp;&nbsp;Notificaciones 
                                @if ($not > 0)
                                    {{ $not }}
                                @endif
                            
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                @if (!empty($notificacion))
                                    @foreach ($notificacion as $n)
                                        <li>
                                            <a href="{{ url('cliente-notificaciones', $n->id_notf) }}">
                                                <div class="card" style="width: 18rem;">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $n->titulo_notf }}</h5>
                                                        <h6 class="card-subtitle mb-2 text-muted">{{ $n->sub_notf }}
                                                        </h6>
                                                        <p class="card-text">
                                                            {{ Str::limit($n->cuerpo, 40, '...') }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                    <li>
                                        <a href="{{ route('cliente-notificaciones', 0) }}" class="btn btn-secondary">Ver
                                            todas las notificaciones.</a>
                                    </li>
                                @else
                                    <li>
                                        <div class="card" style="width: 18rem;">
                                            <p>No tienes notificación</p>
                                            <hr />
                                            <a href="{{ route('cliente-notificaciones', 0) }}"
                                                class="btn btn-secondary">Ver todas las notificaciones.</a>
                                        </div>
                                    </li>
                                @endif
                            </ul>
                        </div>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{Request::is('solicitar-credito') ? 'active'  : null}}" aria-current="page" href="{{ route('solicitar-credito') }}">
                            <img class="m-1" src="{{ asset('img/assets/aplicacionCliente/Grupo 264.png') }}"
                                alt="">
                            Solicitud de nuevo crédito
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('dashboard') ? 'active'  : null}}" aria-current="page" href="{{ route('dashboard') }}">
                            <img class="m-1"
                                src="{{ asset('img/assets/aplicacionCliente/ICONO_DOC E INF_ GRIS.svg') }}"
                                alt="">
                            &nbsp;&nbsp;&nbsp;Documentación e información
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="m-1" src="{{ asset('img/assets/aplicacionCliente/Grupo 397.png') }}"
                                alt="">
                            &nbsp;&nbsp;Ajustes
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('miperfil') }}">
                                    <img class="me-2" src="{{ asset('img/assets/aplicacionCliente/Grupo 947.png') }}"
                                        alt="">
                                    Mi perfil
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('contacto') }}">
                                    <img class="me-2" src="{{ asset('img/assets/aplicacionCliente/Grupo 950.png') }}"
                                        alt="">
                                    Contacto
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <a class="dropdown-item" href="#" onclick="this.closest('form').submit()">
                                        <img class="me-2"
                                            src="{{ asset('img/assets/aplicacionCliente/Grupo 948.png') }}"
                                            alt="">
                                        Cerrar Sesión
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</div>
