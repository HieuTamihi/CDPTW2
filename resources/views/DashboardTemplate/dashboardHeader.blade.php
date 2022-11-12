<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
@if (Auth::check())
    @if (Auth::user()->role == 1)
        <!DOCTYPE html>
        <html>
=======
@if(Auth::check())
@if(Auth::user()->role == 1 || Auth::user()->role == 2 )
<<<<<<< HEAD
<<<<<<< HEAD
<!DOCTYPE html>
<html>
>>>>>>> CRUD_Job_By_Emloy_id

<<<<<<< HEAD
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>AdminLTE 3 | Fixed Sidebar</title>
            <!-- Tell the browser to be responsive to screen width -->
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Font Awesome -->
            <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
            <!-- Ionicons -->
            <link rel="stylesheet"
                href="{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
            <!-- overlayScrollbars -->
            <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
            <!-- Theme style -->
            <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
            <!-- Google Font: Source Sans Pro -->
            <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        </head>
=======
=======
=======
>>>>>>> origin/change_password_employer
=======
@if(Auth::check())
@if(Auth::user()->role == 1 || Auth::user()->role == 2 )
>>>>>>> origin/detail_page
=======
>>>>>>> origin/register_and_send_mail
<!DOCTYPE html>
<html>

>>>>>>> blog_home
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Fixed Sidebar</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<<<<<<< HEAD

</head>
>>>>>>> CRUD_post

        <body class="hold-transition sidebar-mini layout-fixed">
            <!-- Site wrapper -->
            <div class="wrapper">
                <!-- Navbar -->
                <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                    class="fas fa-bars"></i></a>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                            <a href="#" class="nav-link">Home</a>
                        </li>
                    </ul>

                    <!-- SEARCH FORM -->
                    <form class="form-inline ml-3">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>

<<<<<<< HEAD
                    <!-- Right navbar links -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"
                                role="button">
                                <i class="fas fa-th-large"></i>
=======
=======
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

>>>>>>> blog_home
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
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
            <a href="#" class="brand-link">
<<<<<<< HEAD
<<<<<<< HEAD
                <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
=======
                <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
>>>>>>> blog_home
=======
                <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
>>>>>>> origin/detail_page
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/detail_page
                @if(Auth::user()->role == 2)
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('img/'.Auth::user()->employer->image)}}" class="" alt="User Image" style="width:5.1rem;">
                    </div>
                    <div class="info">       
                        <a href="{{route('RUEmployer.show',Auth::user()->employer->id)}}" class="d-block">{{Auth::user()->employer->name_company}}</a>
                    </div>
                </div>
                @endif
<<<<<<< HEAD
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
=======
=======
                @if(Auth::user()->role == 2)
>>>>>>> origin/change_password_employer
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('img/'.Auth::user()->employer->image)}}" class="" alt="User Image" style="width:5.1rem;">
                    </div>
                    <div class="info">       
                        <a href="{{route('RUEmployer.show',Auth::user()->employer->id)}}" class="d-block">{{Auth::user()->employer->name_company}}</a>
                    </div>
                </div>
                @endif
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
>>>>>>> blog_home
=======
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
>>>>>>> origin/detail_page

                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Tables
                                    <i class="fas fa-angle-left right"></i>
                                </p>
<<<<<<< HEAD
>>>>>>> RUEmployer_By_ID
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.navbar -->
                <!-- Main Sidebar Container -->
                <aside class="main-sidebar sidebar-dark-primary elevation-4">
                    <!-- Brand Logo -->
                    <a href="#" class="brand-link">
                        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                            class="brand-image img-circle elevation-3" style="opacity: .8">
                        <span class="brand-text font-weight-light">AdminLTE 3</span>
                    </a>
                    <!-- Sidebar -->
                    <div class="sidebar">
                        <!-- Sidebar user (optional) -->
                        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                            <div class="image">
                                <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                                    alt="User Image">
                            </div>
                            <div class="info">
                                <a href="#" class="d-block">Alexander Pierce</a>
                            </div>
                        </div>
                        <!-- Sidebar Menu -->
                        <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                                data-accordion="false">

                                <li class="nav-item has-treeview menu-open">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-copy"></i>
                                        <p>
                                            Tables
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link active">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Fixed Sidebar</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Fixed Navbar</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-table"></i>
                                        <p>
                                            Users
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('AdminUser.index') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>List Users</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-table"></i>
                                        <p>
                                            Employer
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('AdminEmloyer.index') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>List Employer</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-table"></i>
                                        <p>
                                            Job Posting
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('AdminJobposting.index') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>List Job Posting</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
<<<<<<< HEAD

                                <!-- <ul class="nav nav-treeview">
=======
                            </ul>
                        </li>
<<<<<<< HEAD
<<<<<<< HEAD
                        <!-- Employer -->
=======
                        <!-- List Job By Employer_ID -->
>>>>>>> CRUD_Job_By_Emloy_id
=======
                        <!-- List Job By Employer_ID -->
>>>>>>> RUEmployer_By_ID
=======
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fixed Sidebar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fixed Navbar</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> blog_home
=======
                        <!-- List Job By Employer_ID -->
>>>>>>> origin/change_password_employer
=======
                        <!-- List Job By Employer_ID -->
>>>>>>> origin/detail_page
=======
                        <!-- List Job By Employer_ID -->
>>>>>>> origin/register_and_send_mail
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                                    Employer
=======
                                    Lists Job Posting
>>>>>>> CRUD_Job_By_Emloy_id
=======
                                    Lists Job Posting
>>>>>>> RUEmployer_By_ID
=======
                                    Tables
>>>>>>> blog_home
=======
                                    Lists Job Posting
>>>>>>> origin/change_password_employer
=======
                                    Lists Job Posting
>>>>>>> origin/detail_page
=======
                                    Lists Job Posting
>>>>>>> origin/register_and_send_mail
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                                    <a href="{{route('CRUDEmployer.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Post</p>
=======
                                    <a href="{{route('CRUDJobByEmployer.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
<<<<<<< HEAD
                                        <p>Lists job</p>
>>>>>>> CRUD_Job_By_Emloy_id
=======
=======
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Simple Tables</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
>>>>>>> blog_home
                                        <p>DataTables</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>jsGrid</p>
<<<<<<< HEAD
=======
                                    <a href="{{route('CRUDJobByEmployer.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lists job</p>
>>>>>>> RUEmployer_By_ID
=======
>>>>>>> blog_home
=======
                                    <a href="{{route('CRUDJobByEmployer.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lists job</p>
>>>>>>> origin/change_password_employer
=======
                                    <a href="{{route('CRUDJobByEmployer.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lists job</p>
>>>>>>> origin/detail_page
=======
                                    <a href="{{route('CRUDJobByEmployer.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lists job</p>
>>>>>>> origin/register_and_send_mail
                                    </a>
                                </li>
                            </ul>
                        </li>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> blog_home
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Post
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
<<<<<<< HEAD
                                    <a href="{{ route('admin-blog-home.index') }}" class="nav-link">
=======
                                    <a href="{{ route('blog-home.index') }}" class="nav-link">
>>>>>>> blog_home
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Home Posts</p>
                                    </a>
                                </li>
                                <li class="nav-item">
<<<<<<< HEAD
                                    <a href="{{ route('admin-blog-home.create') }}" class="nav-link">
=======
                                    <a href="{{ route('blog-add.create') }}" class="nav-link">
>>>>>>> blog_home
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Posts</p>
                                    </a>
                                </li>
                                <li class="nav-item">
<<<<<<< HEAD
                                    <a href="{{ route('admin-blog-comment.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Comment Posts</p>
>>>>>>> CRUD_post
=======
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Edit Posts</p>
>>>>>>> blog_home
                                    </a>
                                </li>
                            </ul>
                        </li>
<<<<<<< HEAD
<<<<<<< HEAD
                        <!-- /Employer -->
                        <ul class="nav nav-treeview">
>>>>>>> CRUD_Employer_By_ID
=======
=======
>>>>>>> RUEmployer_By_ID
=======
>>>>>>> origin/change_password_employer
=======
>>>>>>> origin/register_and_send_mail
                        <!-- END List Job  -->

                        <!-- <ul class="nav nav-treeview">
>>>>>>> CRUD_Job_By_Emloy_id
=======
                        <ul class="nav nav-treeview">
>>>>>>> blog_home
=======
                        <!-- END List Job  -->

                        <!-- <ul class="nav nav-treeview">
>>>>>>> origin/detail_page
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Inbox</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Compose</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Read</p>
                                </a>
                            </li>
<<<<<<< HEAD
<<<<<<< HEAD
                        </ul> -->
                                <li class="nav-item has-treeview">
                                    @if (Auth::check())
                                        <form method="POST" name="logout" action="{{ route('logout') }}">
                                            @csrf
                                            <a href="javascript:document.logout.submit()" class="nav-link">
                                                <i class="nav-icon fas fa-table"></i>
                                                <p>
                                                    Logout
                                                </p>
                                            </a>
                                        </form>
                                    @else
                                        <a href="{{ route('login') }}" class="nav-link">
                                            <i class="nav-icon fas fa-table"></i>
                                            <p>
                                                Login
                                            </p>
                                        </a>
                                    @endif
                                </li>
                            </ul>
                        </nav>
                    </div>
                </aside>

                @yield('main')

                <aside class="control-sidebar control-sidebar-dark">
                </aside>
            </div>
            <!-- jQuery -->
            <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
            <!-- Bootstrap 4 -->
            <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
            <!-- overlayScrollbars -->
            <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
            <!-- AdminLTE App -->
            <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="{{ asset('dist/js/demo.js') }}"></script>
        </body>

<<<<<<< HEAD
        </html>
    @else
        <section>
            <div class="error404" style="text-align: center; padding-top:25px;">
                <div class="error-content">
                    <h3>Xin lỗi, chúng tôi không tìm thấy trang mà bạn cần!</h3>
                    <div class="list-contact">
                        <div class="itemct">
                            <a href="{{ route('index') }}" class="link link--yellow" style="color: blue;">
                                <i class="iconerror-tgdd"></i>
                                <p>Trở về trang chủ</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@else
    <section>
        <div class="error404" style="text-align: center; padding-top:25px;">
            <div class="error-content">
                <h3>Xin lỗi, chúng tôi không tìm thấy trang mà bạn cần!</h3>
                <div class="list-contact">
                    <div class="itemct">
                        <a href="{{ route('index') }}" class="link link--yellow" style="color: blue;">
                            <i class="iconerror-tgdd"></i>
                            <p>Trở về trang chủ</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
=======
=======
                        </ul>
=======
                        </ul> -->
                        <li class="nav-item has-treeview">
                            @if(Auth::check())
                            <form method="POST" name="logout" action="{{ route('logout') }}">
                                @csrf
                                <a href="javascript:document.logout.submit()" class="nav-link">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        Logout
                                    </p>
                                </a>
                            </form>
                            @else
                            <a href="{{route('login')}}" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Login
                                </p>
                            </a>
                            @endif
>>>>>>> origin/detail_page
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

>>>>>>> blog_home
        @yield('main')

        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('dist/js/demo.js') }}"></script>
<<<<<<< HEAD
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('ckeditorPost');
    </script>
</body>

</html>
<<<<<<< HEAD
>>>>>>> CRUD_post
=======
</body>

</html>
>>>>>>> blog_home
=======
@else
<section>
    <div class="error404" style="text-align: center; padding-top:25px;">
        <div class="error-content">
            <h3>Xin lỗi, chúng tôi không tìm thấy trang mà bạn cần!</h3>
            <div class="list-contact">
                <div class="itemct">
                    <a href="{{route('index')}}" class="link link--yellow" style="color: blue;">
                        <i class="iconerror-tgdd"></i>
                        <p>Trở về trang chủ</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@else
<section>
    <div class="error404" style="text-align: center; padding-top:25px;">
        <div class="error-content">
            <h3>Xin lỗi, chúng tôi không tìm thấy trang mà bạn cần!</h3>
            <div class="list-contact">
                <div class="itemct">
                    <a href="{{route('index')}}" class="link link--yellow" style="color: blue;">
                        <i class="iconerror-tgdd"></i>
                        <p>Trở về trang chủ</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
>>>>>>> origin/detail_page
