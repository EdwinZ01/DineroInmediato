<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Dinero Inmediato</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b34d6606d6.js" crossorigin="anonymous"></script>

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/backoffice/style.css') }}" rel="stylesheet">
    @stack('css')
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    @livewireStyles
    @livewireScripts

    <style>
        .solicita:hover{
            background: #da8b0c !important;

            color: white;

        }
        .solicita{
            background: #f5a82d !important;
            color: white;
        }
        .btn-verde:{
            background: #38A937
        }
        .btn-verde:hover{
            color: #e0fc70;
        }

    </style>
</head>

<body >
    
{{--Menú--}}
@include('components.landing.cuerpo._menu')

{{--Mi perfil--}}
    <div class="content cent">
        <div class="" style="text-align:left;">
            <p class="texto-solicita-verde" style="padding-bottom: 5px; text-align:center;">Mi pérfil</p>
            <br />
            <p>Nombre: <input placeholder=" Juan Gutiérrez Mora"></p>
            <br />
            <p>Telefono: <input placeholder=" 0987654321"></p>    
            <br />
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                  <label for="inputPassword6" class="col-form-label">Correo</label>
                </div>
                <div class="col-auto">
                 <input class="form-control" placeholder="Juan09@correo.com">
                </div>
            </div>
            <br />
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                  <label for="inputPassword6" class="col-form-label">Contraseña</label>
                </div>
                <div class="col-auto">
                  <a class="btn btn-gris" href="{{route('miperfil')}}" style="height: 35px;">Cambiar contraseña</a>
                </div>
            </div>
            <div>
            <center><a href="" class="btn btn-verde btn-block btn-lg" style=" margin-top:80px;">Guardar cambios</a></center>
            </div>
        </div>
    </div>



{{--Fotter--}}

    @include('components.landing.cuerpo._fotter')  

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/landing/sendEmail.js') }}"></script>
    <script src="{{ asset('js/landing/modal-register.js') }}"></script>
    @stack('js')
</body>

</html>
