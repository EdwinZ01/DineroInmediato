<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Historial de montos autorizados</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('img/backoffices/Grupo 979.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/backoffice/style.css') }}">

</head>
<body>

    <x-backoffice.menu-backoffice />

    <!--inicio de titulo-->
    <h1 class="text-center my-5" style="letter-spacing: 1px">Historial de Montos Autorizados</h1>
    <!--fin de titulo-->

    <!-- inicio apartado de busqueda-->
    <div class="container-fluid mt-5">
      <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
              <div class="row">
                  <div class="col-10 col-sm-10 col-md-10 col-lg-8 offset-2 offset-sm-2 offset-md-2 offset-lg-4">
                    <div class="input-group">
                      <div class="input-wrapper me-4 ms-3" style="width: 221px;">
                        <input type="search" name="" id="" class="ms-1 mt-2" placeholder="Buscar">
                        <svg xmlns="http://www.w3.org/2000/svg" class="input-icon" style="top: 60%;" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>
                      </div>
                      <button type="button" class="btn boton-color px-2 ms-5 mt-2 rounded">Buscar</button>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin apartado de busqueda-->

    <!-- inicio tabla de elementos buscados-->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-10 col-lg-4 offset-md-1 offset-lg-4">
                        <div class="table-responsive text-center">
                            <table class="table table-bordered border-secondary">
                                <thead>
                                    <tr class="table-secondary">
                                        <th scope="col">Número de pago</th>
                                        <th scope="col">Fecha de pago</th>
                                        <th scope="col">Monto Autorizado</th>
                                    </tr>
                                </thead>
                               <tbody>
                                    <tr class="table-light">
                                        <td>Datos</td>
                                        <td>23/05/22</td>
                                        <td>500</td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <td>Datos</td>
                                        <td>3/06/22</td>
                                        <td>800</td>
                                    </tr>
                                    <tr class="table-light">
                                        <td>Datos</td>
                                        <td>7/05/22</td>
                                        <td>1000</td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <td>Datos</td>
                                        <td>12/01/22</td>
                                        <td>350</td>
                                    </tr>
                                    <tr class="table-light">
                                        <td>Datos</td>
                                        <td>20/04/22</td>
                                        <td>750</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin tabla de elementos buscados-->



    <!--inicio de paginador-->
    <div class="container-fluid mt-5">
        <div class="row mt-5">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 col-md-4 col-lg-3 offset-sm-2 offset-md-4 offset-lg-5">
                        <nav aria-label="Page navigation example" class="ms-1">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#"><img class="flechaIzq" src="{{ asset('img/backoffices/Flecha Izquierda.png') }}" alt=""> Anterior</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" aria-label="Next" href="#">Siguiente<img class="flechaDer" src="{{ asset('img/backoffices/Flecha Derecha.png') }}" alt=""> </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--fin de paginador-->

    <!--inicio de botones-->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-10 col-lg-10 offset-md-1 offset-lg-1">
                <div class="row">
                    <div class="col-12 col-sm-4 col-md-4 col-lg-5 offset-sm-2 offset-lg-1 offset-md-2">
                        <button type="button" class="btn px-5 my-3 "
                            style="background-color: #38a937; color:white; font-size: 20px;"><a href="/clientes" style="text-decoration: none; color:white;">Volver</a></button>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-3 offset-sm-2 offset-lg-3 offset-md-2">
                        <button type="button" class="btn px-5 my-3"
                            style="background-color: #f29100; color:white; font-size: 20px;">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--fin de botones-->

    @extends('backoffices.components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/backoffice/menuBurger.js') }}"></script>
</body>
</html>
