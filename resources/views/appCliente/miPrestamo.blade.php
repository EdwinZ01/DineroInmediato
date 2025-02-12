<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Mi prestamo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.css" rel="stylesheet" />--}}
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/assets/aplicacionCliente/Grupo 978.png') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app-clientes-estilos/menu.css')}}">
    <link href="{{ asset('css/backoffice/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app-clientes-estilos/estilos-appclientes.css') }}">
    <style>

        @font-face {
            font-family: 'CarotSans-Medium';
            src: url("../fonts/CarotSans-Medium.otf") format('woff');
        }

        @font-face {
            font-family: 'CarotSans-Regular';
            src: url("./fonts/CarotSans-Regular.otf") format('woff');
        }

        @font-face {
            font-family: 'CarotSans-ExtraLight';
            src: url("./fonts/CarotSans-ExtraLight.otf") format('woff');
        }

        @font-face {
            font-family: 'CarotSans-Bold';
            src: url("./fonts/CarotSans-Bold.otf") format('woff');
        }

        @font-face {
            font-family: 'CarotSans-Light';
            src: url("./fonts/CarotSans-Light.otf") format('woff');
        }

        .texto-carotSans--Medium {
            font-family: 'CarotSans-Medium';
        }

        .texto-carotSans--Regular {
            font-family: 'CarotSans-Regular';
        }

        .texto-carotSans--ExtraLight {
            font-family: 'CarotSans-ExtraLight';
        }

        .texto-carotSans--Bold {
            font-family: 'CarotSans-Bold';
        }

        .texto-carotSans--Light {
            font-family: 'CarotSans-Light';
        }

        .solicita:hover {
            background: #da8b0c !important;

            color: white;

        }

        .solicita {
            background: #f5a82d !important;
            color: white;
        }

        .btn-verde: {
            background: #38A937;
        }

        .btn-verde:hover {
            color: #e0fc70;
        }

        /* .containerUno{
            display: flex;
        }
        .containerUno div:nth-of-type(1) {
        order: 4;
            }

            .boxes button:nth-of-type(2) {
                order: 3;
            }

            .boxes button:nth-of-type(3) {
                order: 2;
            }

            .boxes button:nth-of-type(4) {
                order: 1;
            } */
        /*Responsivo para Moviles*/
        @media (max-width: 400px) {
            footer {
                /* flex-direction: column-reverse; */
                margin: auto;


            }

            /* input, textarea{
                width: 100%;
                height: 100%;
                margin: 20px 0px 20px 0px;
            } */
            /* .form-control{
                margin: 20px 0px 20px 0px;
            } */
            /* .row{
                margin: 20px 0px 20px 0px;
            } */
        }

        /*Responsivo para Tablets*/
        @media (min-width: 400px) and (max-width: 1024px) {
            footer {
                /* flex-direction: column-reverse; */
                margin: auto;
            }

            /* input, textarea{
                width: 100%;
                height: 100%;
            } */
            /* .form-control{
                margin: 20px 0px 20px 0px;

            } */
        }

        /*Responsivo para Escritorio*/
        @media (min-width: 1025px) and (max-width: 1980px) {
            footer {
                /* flex-direction: column-reverse; */
                margin: auto;

            }
        }

        /*Responsivo para Full Hd*/
        @media (min-width: 1981px) {
            footer {
                margin: auto;

            }

            /* .form-control{
                margin: 20px 0px 20px 0px;

            } */
        }


        @media screen and (min-width: 600px) {
            .boxes {
                display: flex;
            }

            .boxes button:nth-of-type(1) {
                order: 4;
                background: #474747;
                border: none;
            }

            .boxes button:nth-of-type(2) {
                order: 3;
            }

            .boxes button:nth-of-type(3) {
                order: 2;
            }

            .boxes button:nth-of-type(4) {
                order: 1;
            }
        }
    </style>
</head>

<body>
    {{-- Menú Cliente --}}
    <livewire:app-cliente.menu-cliente/>
    @livewireScripts


    {{--Datos Generales del credito--}}
    <div class="container" style="text-align:center;">
        <br>
        <h1 class=" font-bold text-center texto-carotSans--Medium" style="color: #4A9D22; font-size: 50px;">Mi préstamo
        </h1>
        <br />
        <h1 class="text-3xl font-bold text-datgencred text-center" style="color: #F5A733;">
            Datos generales de crédito
        </h1>
        <br>
        <div class="container" style="margin:0px auto;">
            <center>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="border text-center" scope="col">Número de cliente</th>
                            <th class="border text-center" scope="col">Número de crédito</th>
                            <td class="" style="border: none;">
                                <button type="button" class="btn btn-success text-center" style="background: #4A9D22;"
                                    data-bs-toggle="modal" data-bs-target="#ModalAdelaPagosAppCliente">Adelantar
                                    pagos</button>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($credito->count())
                            <tr>
                                <!-- <th scope="row">1</th> -->
                                <td class="border text-center">NC-{{Auth::user()->num_cliente;}}</td>
                                <td class="border text-center">{{$credito[0]->num_credito;}}</td>
                            </tr>
                            <tr>
                                <th class="border text-center" scope="col">Monto autorizado</th>
                                <th class="border text-center" scope="col">Fecha de inicio del crédito</th>
                            </tr>
                            <tr>
                                <td class="border text-center">{{$credito[0]->monto_aut;}}</td>
                                <td class="border text-center">{{$credito[0]->fecha_inicio;}}</td>
                            </tr>
                            <tr>
                                <th class="border text-center" scope="col">Número de pagos</th>
                                <th class="border text-center" scope="col">Fecha de término del crédito</th>
                            </tr>
                            <tr>
                                <td class="border text-center">{{$credito[0]->num_pagos;}}</td>
                                <td class="border text-center">{{$credito[0]->fecha_termino;}}</td>
                            </tr>
                        @else
                            <tr>
                                <!-- <th scope="row">1</th> -->
                                <td class="border text-center" >Sin Datos</td>
                                <td class="border text-center" >Sin Datos</td>
                            </tr>
                            <tr>
                                <th class="border text-center" scope="col">Monto autorizado</th>
                                <th class="border text-center" scope="col">Fecha de inicio del crédito</th>
                            </tr>
                            <tr>
                                <td class="border text-center">Sin Datos</td>
                                <td class="border text-center">Sin Datos</td>
                            </tr>
                            <tr>
                                <th class="border text-center" scope="col">Número de pagos</th>
                                <th class="border text-center" scope="col">Fecha de término del crédito</th>
                            </tr>
                            <tr>
                                <td class="border text-center" >Sin Datos</td>
                                <td class="border text-center" >Sin Datos</td>
                            </tr>
                        @endif

                    </tbody>
                </table>
            </center>
        </div>

    </div>
    {{-- Inicia Modal para boton Adelantar pagos --}}
    <!-- Modal -->
    <div class="modal fade" id="ModalAdelaPagosAppCliente" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- style="border: none;" -->
                    <h1 class="modal-title col-11 text-center p-3 texto-carotSans--Medium" id="exampleModalLabel"
                        style="color: #4A9D22; font-size: 35px;">Adelante pagos, es la mejor opción.</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ms-4 me-4">
                    <p class="texto-carotSans--Medium" style="font-size: 30px; color: #F5A733;">Para adelantar pagos a
                        su crédito deberá seguir paso a paso las siguientes
                        indicaciones:</p>
                    <p class="texto-carotSans--Regular ps-3 pe-3" style="font-size: 22px; color: #474747;">Solicite vía mensaje
                        (sección de mensajes) al área de cobranza el
                        formato para adelantar pagos.</p>
                    <p class="texto-carotSans--Regular ps-3 pe-3" style="font-size: 22px; color: #474747;">El formato le llegará
                        vía correo electrónico.</p>
                    <p class="texto-carotSans--Regular ps-3 pe-3" style="font-size: 22px; color: #474747;">Imprima dicho formato y
                        pase al banco correspondiente a realizar su
                        pago.</p>
                    <p class="texto-carotSans--Regular ps-3 pe-3" style="font-size: 22px; color: #474747;">Escanee el comprobante
                        de pago y adjúntelo vía mensaje en la sección
                        “mensajes” dirigido al área de cobranza o envíe un correo electrónico
                        con el comprobante escaneado al correo: <span class="text-tpres"> cobranza@midominio.com</span>
                    </p>
                    <p class="texto-carotSans--Regular ps-3 pe-3" style="font-size: 22px; color: #474747;">
                        Una vez que recibamos la documentación, actualizaremos la
                        información de su pago en un periodo máximo de 5 días hábiles.
                    </p>
                    <p class="texto-carotSans--Regular ps-3 pe-3" style="font-size: 22px; color: #474747;">
                        De no ver reflejado su pago después de este periodo, vuelva a
                        ponerse en contacto con nosotros vía mensaje o correo electrónico.
                    </p>
                </div>
                <div class="modal-footer" style="border: none;">
                    <div class="container-fluid h-100">
                        <div class="row w-100 align-items-center">
                            <div class="col text-center">
                                <button class="btn regular-button texto-carotSans--Medium"
                                    style="background-color:  #4A9D22; color: #FFFFFF;">Aceptar</button>
                            </div>
                        </div>
                    </div>
                    <!-- <center>
            <button class="btn btn-primary texto-carotSans--Medium" type="button" style="background-color:  #4A9D22;">Aceptar</button>
          </center> -->
                </div>
            </div>
        </div>
    </div>
    {{-- Termina Modal para boton Adelantar pagos --}}
    {{--Tabla de pagos--}}
    <div class="container">
        <div class="row">
            <livewire:app-cliente.tabla-pagos />
        </div>
    </div>


    {{--Tabla Amortización--}}
    <div class="container">
        <div class="row">
            <livewire:app-cliente.tabla-amortizacion />
        </div>
    </div>
    <div class="container d-flex flex-row-reverse">
        <p style="font-size: 25px;">La tabla de amortización se genera al momento de iniciar su crédito. En caso de
            actualizarse por pagos adelantados a capital o
            por retraso, deberá solicitar la nueva tabla de amortización enviando un mensaje al área de cobranza. Dicha
            tabla se enviará
            en formato excel por correo electrónico.</p>
    </div>

    {{-- Fotter --}}

    {{-- @include('components.landing.cuerpo._fotter') --}}
    @include('components.landing.cuerpo._fotterClienteBootstrap')
   {{--  @include('components.landing.cuerpo._fotterClienteBootstrapResponsivo') --}}
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
