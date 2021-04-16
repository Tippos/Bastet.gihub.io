<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bastet's Home</title>
    <!--css web-->
    <link rel="stylesheet" href="{{asset('css/styleBootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/styleContentWeb.css')}}">
    <!-- import CSS -->
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
    <link rel="icon" type="image/png" href="{{asset('login/images/icons/icon.jpg')}}"/>
    <!-- CSS only -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('adminPage/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('adminPage/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('adminPage/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('adminPage/dist/css/style.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{asset('adminPage/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo"
             height="60"
             width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/home" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="https://www.facebook.com/BastetsHome" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">

            <!-- Notifications Dropdown Menu -->

            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/admin" class="brand-link">
            <img src="{{asset('adminPage/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Admin</span>
        </a>

        <!-- Sidebar -->
            <!-- SidebarSearch Form -->
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="inforAdmin" class="nav-link">
                            <i class="nav-icon fa fa-user-circle"></i>
                            <p>
                                Infor
                                <span class="badge badge-info right"></span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-shopping-cart"></i>
                            <p>
                                Product
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">3</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview ">
                            <li class="nav-item">
                                <a href="/food" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Food</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/toy" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Toy</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/medicine" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Medicine</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/newProduct" class="nav-link">
                                    <i class="nav-icon fa fa-plus"></i>
                                    <p>
                                        Add Product
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <div class="navbar-search-block">
                                    <form class="form-inline" action="/searchProduct" method="post">
                                        <div class="input-group input-group-sm">
                                            <input class="form-control form-control-navbar" type="text" name="key"
                                                   placeholder="Search with Product's Name"
                                                   aria-label="Search">
                                            <div class="input-group-append">
                                                <button class="btn btn-navbar" type="submit">
                                                    <i style="color: white" class="fas fa-search"></i>
                                                </button>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-bell"></i>
                            <p>
                                Cat
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">2</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/adminCat" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        List Cat
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/newCat" class="nav-link">
                                    <i class="nav-icon fa fa-plus"></i>
                                    <p>
                                        Add Cat
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <div class="navbar-search-block">
                                    <form class="form-inline" action="/searchCat" method="post">
                                        <div class="input-group input-group-sm">
                                            <input class="form-control form-control-navbar" type="text" name="key"
                                                   placeholder="Search with Cat's Name"
                                                   aria-label="Search">
                                            <div class="input-group-append">
                                                <button class="btn btn-navbar" type="submit">
                                                    <i style="color: white" class="fas fa-search"></i>
                                                </button>

                                            </div>
                                        </div>
                                    </form>
                                </div>

                        </ul>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-user"></i>
                            <p>
                                User
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">3</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/adminUser" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Administrator
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/standardUser" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        User Standard
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/newUser" class="nav-link">
                                    <i class="nav-icon fa fa-plus"></i>
                                    <p>
                                        Add User
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <div class="navbar-search-block">
                                    <form class="form-inline" action="/searchUser" method="post">
                                        <div class="input-group input-group-sm">
                                            <input class="form-control form-control-navbar" type="text" name="key"
                                                   placeholder="Search with Name"
                                                   aria-label="Search">
                                            <div class="input-group-append">
                                                <button class="btn btn-navbar" type="submit">
                                                    <i style="color: white" class="fas fa-search"></i>
                                                </button>

                                            </div>
                                        </div>
                                    </form>
                                </div>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-arrow-up"></i>
                        </a>
                    </li>


                    <!-- /.sidebar-menu -->
        </div>

        <!-- /.sidebar -->

    </aside>


{{--    <footer class="main-footer">--}}
{{--        <strong>Copyright &copy; 2014-2021 <a href="/">Bastet's Home</a>.</strong>--}}
{{--        All rights reserved.--}}
{{--        <div class="float-right d-none d-sm-inline-block">--}}
{{--            <b>Version</b> 3.1.0-rc--}}
{{--        </div>--}}
{{--    </footer>--}}

<!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>


<div class="table">
    @yield('table')
</div>


<!-- import JavaScript -->
<script src="https://unpkg.com/element-ui/lib/index.js"></script>

<!-- Vue JS -->
<script src="https://unpkg.com/vue/dist/vue.js"></script>
<!-- js adminPage-->
<script src="{{asset('adminPage/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('adminPage/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- overlayScrollbars -->
<script src="{{asset('adminPage/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminPage/dist/js/adminlte.js')}}"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
</body>
</html>
