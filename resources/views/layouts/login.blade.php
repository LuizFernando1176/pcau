<html>
    <head>
        <title>Central de Atendimento ao Usuario</title>
        <link href="{{ asset('css/codebase.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/css_cau.css') }}" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="page-container" class="main-content-boxed">

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="bg-image" style="background-image:"{{ url('img/photo34@2x.jpg')}}">
                    <div class="row mx-0 bg-black-op">
                        <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                            <div class="p-30 invisible" data-toggle="appear">
                                <img src="img/logo_cabecalho.png" class="img-fluid">
                                <p class="font-size-h3 font-w600  yellow_olinda_cor">
                                    <b>Prefeitura Municipal de Olinda - Coordenadoria de Informatica.</b>
                                </p>
                                <b> <p class="font-italic text-white-op">
                                        Copyright &copy; <span class="js-year-copy"></span>
                                    </p></b>
                            </div>
                        </div>
                        <div class="  col-md-6 col-xl-4 align-items-center blue_olinda yellow_olinda_cor invisible" data-toggle="appear" data-class="animated fadeInRight">
                            <div class="content content-full mt-2">
                                <!-- Header -->
                                <div class="px-30 py-10">
                                    <p class="link-effect font-w400" >
                                        <!--<i class="si si-fire"></i>-->
                                        <span class="font-size-h2 text-white">Secretaria da Fazenda e Administração</span>
                                    </p>
                                    <!--<h1 class="h5 font-w700 mt-30 mb-10 text-white">Bem Vindo ao Sistema de Abretura de Chamado. </h1>-->
                                    <h2 class="h6 font-w400  mb-0 yellow_olinda_cor">Abra o seu chamado.</h2>
                                </div>

                                <form class="js-validation-signin px-30" action="paginaInicial.php" method="post">
                                    <div class="form-group row">
                                        <!--                                        @csrf-->
                                        <div class="col-12">
                                            <div class="form-material yellow_olinda_cor">

                                                <input type="email" class="form-control" id="email" name="email">
                                                <label for="login-username">Email</label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material yellow_olinda_cor">

                                                <input type="password" class="form-control" id="password" name="password">
                                                <label for="login-password">Senha</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="login-remember-me" name="login-remember-me">
                                                <label class="custom-control-label" for="login-remember-me">Me Lembre</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-sm btn-hero btn-alt-primary">
                                            <i class="si si-login mr-10"></i> Logar
                                        </button>
                                        <div class="mt-30">
                                            <a class="link-effect text-white mr-10 mb-5 d-inline-block" href="op_auth_signup2.html">
                                                <i class="fa fa-plus mr-5"></i> Criar Usuario
                                            </a>
                                            <a class="link-effect text-white mr-10 mb-5 d-inline-block" href="op_auth_reminder2.html">
                                                <i class="fa fa-warning mr-5"></i> Esqueceu a senha?
                                            </a>
                                        </div>
                                    </div>
                                </form>
                                <!-- END Sign In Form -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->
        <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/codebase.app.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/codebase.core.min.js') }}" type="text/javascript"></script>
    </body>

</html>