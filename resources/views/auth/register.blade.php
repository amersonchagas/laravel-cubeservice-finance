<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('viho/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('viho/images/favicon.png')}}" type="image/x-icon">
    <title>{{env('APP_NAME')}} - Cadastro</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{asset('viho/css/fontawesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('viho/css/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('viho/css/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('viho/css/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('viho/css/feather-icon.css')}}">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('viho/css/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('viho/css/style.css')}}">

    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('viho/css/responsive.css')}}">


    <link id="color" rel="stylesheet" href="{{asset('custom/css/custom-admin.css')}}" media="screen">
</head>
<body>
<!-- Loader starts-->
<div class="loader-wrapper">
    <div class="theme-loader">
        <div class="loader-p"></div>
    </div>
</div>
<!-- Loader ends-->
<!-- page-wrapper Start-->
<section>
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-xl-7 p-0"><img class="bg-img-cover bg-center" src="{{asset('custom/images/bg-register.jpg')}}" alt="looginpage"></div>
            <div class="col-xl-5 p-0">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <div class="login-card">


                    <form class="theme-form login-form" method="post" action="{{route('register')}}">
                        @csrf

                        <h4 style="text-align: center"><img class='img-fluid' src="{{asset('custom/images/logo.png')}}"></h4>
                        <h4 style="text-align: center">Criar Conta</h4>
                        <div class="form-group">
                            <label>CPF/CNPJ</label>
                            <div class="small-group">
                                <div class="input-group"><span class="input-group-text"><i class="icon-credit-card"></i></span>
                                    <input name='cpf_cnpj' class="form-control" type="text" required="" placeholder="Somente Números" {{old('cpf_cnpj')}}>
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <label>Nome</label>
                            <div class="small-group">
                                <div class="input-group"><span class="input-group-text"><i class="icon-user"></i></span>
                                    <input name='name' class="form-control" type="text" required="" placeholder="Nome" {{old('name')}}>
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                                <input name="email" class="form-control" type="email" required="" placeholder="Email" value="{{old('email')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Senha</label>
                            <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                                <input name="password"  class="form-control" type="password" required="" placeholder="*********">
                                <div class="show-hide">
                                    <span class="show"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Confirmar Senha</label>
                            <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                                <input name="password_confirmation"  class="form-control" type="password"  required="" placeholder="*********">
                                <div class="show-hide">
                                    <span class="show"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <input id="checkbox1" type="checkbox">
                                <label class="text-muted" for="checkbox1">Aceito os <span> Termos de Uso</span> e <span>Politicas de Privacidade</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit">Criar Conta</button>
                        </div>
                        {{--<div class="login-social-title">
                            <h5>Sign in with</h5>
                        </div>
                        <div class="form-group">
                            <ul class="login-social">
                                <li><a href="https://www.linkedin.com/login" target="_blank"><i data-feather="linkedin"></i></a></li>
                                <li><a href="https://www.linkedin.com/login" target="_blank"><i data-feather="twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/login" target="_blank"><i data-feather="facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/login" target="_blank"><i data-feather="instagram">                  </i></a></li>
                            </ul>
                        </div>--}}
                        <p>Já possui uma conta?<a class="ms-2" href="{{route('login')}}">Entrar</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- page-wrapper end-->
<!-- latest jquery-->
<script src="{{asset('viho/js/jquery-3.5.1.min.js')}}"></script>
<!-- feather icon js-->
<script src="{{asset('viho/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('viho/js/icons/feather-icon/feather-icon.js')}}"></script>
<!-- Sidebar jquery-->
<script src="{{asset('viho/js/sidebar-menu.js')}}"></script>
<script src="{{asset('viho/js/config.js')}}"></script>
<!-- Bootstrap js-->
<script src="{{asset('viho/js/bootstrap/popper.min.js')}}"></script>
<script src="{{asset('viho/js/bootstrap/bootstrap.min.js')}}"></script>
<!-- Plugins JS start-->
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{asset('viho/js/script.js')}}"></script>
<!-- login js-->
<!-- Plugin used-->
</body>
</html>
</html>
