<!doctype html>@can('admin')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="author" content="Maximo D j M Junior">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="/./images/favicon.png">
    <!-- Page Title  -->
    <title>Painel de Valores | Valores Arrecadados</title>
    <!-- StyleSheets  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/./assets/css/dashlite.css?ver=2.2.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link id="skin-default" rel="stylesheet" href="/./assets/css/theme.css?ver=2.2.0">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />


  
    <style>body {
    background: rgb(99, 39, 120)
}

.form-control:focus {
    
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}</style>
</head>

<body class="nk-body npc-invest bg-lighter ">
    <div class="nk-app-root">
        <!-- wrap @s -->
        <div class="nk-wrap ">
            <!-- main header @s -->
            <div class="nk-header nk-header-fluid is-theme">
                <div class="container-xl wide-xl">
                    <div class="nk-header-wrap">
                        <div class="nk-menu-trigger mr-sm-2 d-lg-none">
                            <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-menu"></em></a>
                        </div>
                        <div class="nk-header-brand">
                            <a href="/admin" class="logo-link">
                                <img class="logo-light logo-img" src="/./images/logo.png" srcset="./images/logo.png 2x" alt="logo">
                                <img class="logo-dark logo-img" src="/./images/logo.png" srcset="./images/logo.png 2x" alt="logo-dark">
                            </a>
                        </div><!-- .nk-header-brand -->
                        <div class="nk-header-menu" data-content="headerNav">
                            <div class="nk-header-mobile">
                                <div class="nk-header-brand">
                                    <a href="/admin" class="logo-link">
                                        <img class="logo-light logo-img" src="/./images/logo.png" srcset="./images/logo.png 2x" alt="logo">
                                        <img class="logo-dark logo-img" src="/./images/logo.png" srcset="./images/logo.png 2x" alt="logo-dark">
                                    </a>
                                </div>
                                <div class="nk-menu-trigger mr-n2">
                                    <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-arrow-left"></em></a>
                                </div>
                            </div>
                            <ul class="nk-menu nk-menu-main ui-s2">
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-text">Painel de Valores</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="/valores"  class="nk-menu-link">
                                                <span class="nk-menu-text">Valores Arrecadados</span>
                                            </a>
                                        </li><!-- .nk-menu-item -->
                                       
                                 
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-text">Moradores</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="/admin" class="nk-menu-link"><span class="nk-menu-text">Editar lista</span></a>
                                        </li>  
                                        <li class="nk-menu-item">
                                            <a href="/admin/editprofile/{{auth()->user()->id}}" class="nk-menu-link"><span class="nk-menu-text">Procurar Morador</span><span class="nk-menu-badge badge-warning">New</span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item has-sub">
                                    <a href="https://www.google.com/maps/place/R.+Dom+Jaime+Echevarria+-+Jardim+Keralux,+S%C3%A3o+Paulo+-+SP/@-23.4817036,-46.4777535,575m/data=!3m1!1e3!4m5!3m4!1s0x94ce604d911272a5:0x2005ff9b01e7c5e2!8m2!3d-23.4830931!4d-46.476402" target="_blank"class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-text">Mapas</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                            <a href="https://www.google.com/maps/place/R.+Dom+Jaime+Echevarria+-+Jardim+Keralux,+S%C3%A3o+Paulo+-+SP/@-23.4817036,-46.4777535,575m/data=!3m1!1e3!4m5!3m4!1s0x94ce604d911272a5:0x2005ff9b01e7c5e2!8m2!3d-23.4830931!4d-46.476402" target="_blank" class="nk-menu-link"><span class="nk-menu-text">Mapa do Terreno</span><span class="nk-menu-badge badge-warning">Ver</span></a>
                                        </li>
                                            
                                        </li><!-- .nk-menu-item -->
                                          </li><!-- .nk-menu-item -->
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                                
                               
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-header-menu -->
                        <div class="nk-header-tools">
                            <ul class="nk-quick-nav">
                                <li class="dropdown notification-dropdown">
                                    <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                                        <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right dropdown-menu-s1">
                                        <div class="dropdown-head">
                                            <span class="sub-title nk-dropdown-title">Notificação</span>
                                            <a href="#">Saiba de Tudo que acontece no terreno</a>
                                        </div>
                                        <div class="dropdown-body">
                                            <div class="nk-notification">
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                            </div><!-- .nk-notification -->
                                        </div><!-- .nk-dropdown-body -->
                                        <div class="dropdown-foot center">
                                            <a href="#">View All</a>
                                        </div>
                                    </div>
                                </li><!-- .dropdown -->
                                <li class="dropdown user-dropdown order-sm-first">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <div class="user-toggle">
                                            <div class="user-avatar sm">
                                                <em class="icon ni ni-user-alt"></em>
                                            </div>
                                            <div class="user-info d-none d-xl-block">
                                                <div class="user-status">Perfil</div>
                                                <div class="user-name dropdown-indicator">{{ Auth::user()->name }}</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1 is-light">
                                        <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                            <div class="user-card">
                                                <div class="user-avatar">
                                                    <span>AB</span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="lead-text">{{ Auth::user()->name }}</span>
                                                    <span class="sub-text">{{ Auth::user()->email }}</span>
                                                </div>
                                                <div class="user-action">
                                                    <a class="btn btn-icon mr-n2" href="/profile"><em class="icon ni ni-setting"></em></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-inner user-account-info">
                                            <h6 class="overline-title-alt">Valor Colaborado</h6>
                                            <div class="user-balance">{{ Auth::user()->valor1 }} <small class="currency currency-usd">BRL</small></div>
                                            <a href="#" class="link"><span>Valor total Arecadado </span> <em class="icon ni ni-wallet-out"></em></a>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li><a href="/admin/profile/{{ Auth::user()->id }}"><em class="icon ni ni-user-alt"></em><span>Ver Perfil</span></a></li>
                                                <li><a href="/admin/editprofile/{{ Auth::user()->id }}"><em class="icon ni ni-setting-alt"></em><span>Configuração do Perfil</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li><a href="{{ route('logout') }}"><em class="icon ni ni-signout"></em><span>Sair</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li><!-- .dropdown -->
                            </ul><!-- .nk-quick-nav -->
                        </div><!-- .nk-header-tools -->
                    </div><!-- .nk-header-wrap -->
                </div><!-- .container-fliud -->
                
            </div>         
            <div id="biblia" class="animate__animated animate__rubberBand animate__delay-3s">

                       <div id="dailyVersesWrapper" class="biblia"> 
                       </div>
  </div>

   @yield('content')

        </div>
                
            </div>            </div>
            </div>
            </div>
            </body>
                            </html>
 <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="/./assets/js/bundle.js?ver=2.2.0"></script>
    <script src="/./assets/js/scripts.js?ver=2.2.0"></script>
    <script async defer src="https://dailyverses.net/get/verse.js?language=arc"></script>     <!-- mensagens biblica -->

    @elsecan('user')
     <center> <h1>Somente o administrador pode esta AQUI</h1>  
<p> voltando ao seu perfil  </p> </center>
        <meta http-equiv="refresh" content="5;url=/profile/">

    @endcan