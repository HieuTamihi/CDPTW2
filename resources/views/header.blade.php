<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/blogit.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/reset_pass.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/change_pass.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/change_pass_log.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/tracking_work.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/personal_info.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/manage_cv.css') }}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f6dce9b617.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
</head>

<body>
    <!-- Top Header -->
    <div class="topHeader">
        <div class="container">
            <div class="topHeader__menu--logo">
                <a href="{{ asset('index') }}"><img src="{{ asset('img/logo-td.png') }}" alt="" /></a>
                <span>Việc làm hàng đầu</span>
            </div>
            <div class="topHeader__menu--contact">
                <ul>
                    <li>
                        <a href="#"><i class="fa-solid fa-phone"></i>028 3897 0023</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-solid fa-user"></i>Đăng tuyển</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-solid fa-address-book"></i>Liên hệ</a>
                    </li>
                    @if(Auth::check())
                    @if(Auth::user()->role ==2)
                    <li>
                        <a href="DashboardTemplate.dashboard">Quản lý Job</a>
                    </li>
                    @endif
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <!--End Top Header -->
    <!-- Header -->
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light container">
            <div class="container-fluid header__left">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{asset('index')}}">Việc làm
                                IT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ asset('createCV') }}">Tạo CV</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ asset('blogit') }}">Blog IT</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="header__right d-flex">
                <ul>
                    @if (Auth::check() && Auth::user()->role == 2)
                    <li><a class="btn btn-danger header__right--logemp" href="#">Đăng tuyển</a></li>
                    <li>
                        <form method="POST" name="logout" action="{{ route('logout') }}">
                            @csrf
                            <a href="javascript:document.logout.submit()" class="btn btn-dark header__right--logcus"><i class="fa-solid fa-right-from-bracket"></i>Đăng xuất</a>
                        </form>
                    </li>
                    @elseif(Auth::check() && Auth::user()->role == 3)
                    <li>
                        <div class="dropdown">
                            <div class="dropbtn">{{Auth::user()->email}}</div>
                            <div class="dropdown-content">
                                <a href="{{route('ShowEditUser',['id'=>Auth::user()->customer_id])}}">Thông tin cá nhân</a>
                                <a href="{{route('cv.index')}}">Quản lý CV</a>
                                <a href="{{route('wishlist.index')}}">Việc đang theo dõi</a>
                                <form method="POST" name="logout" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="javascript:document.logout.submit()"><i class="fa-solid fa-right-from-bracket"></i>Đăng xuất</a>
                                </form>
                            </div>
                        </div>
                    </li>
                    @elseif(Auth::check() && Auth::user()->role == 1)
                    <li>
                        <form method="POST" name="logout" action="{{ route('logout') }}">
                            @csrf
                            <a href="javascript:document.logout.submit()" class="btn btn-dark header__right--logcus"><i class="fa-solid fa-right-from-bracket"></i>Đăng xuất</a>
                        </form>
                    </li>
                    @else
                    <li>
                        <a class="btn btn-dark header__right--logcus" href="{{ asset('login') }}">Đăng nhập</a>
                    </li>
                    @endif
                </ul>
            </div>
        </nav>
    </header>
    <!-- End header -->
    @yield('footer')
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 footer__adresse ">
                    <!-- <a href=""><img src="img/logo-td.png" alt="" /></a> -->
                    <ul>
                        <li>
                            53 Đ. Võ Văn Ngân, Linh Chiểu, Thành Phố Thủ Đức, Thành phố Hồ
                            Chí Minh
                        </li>
                        <li>Copyright © 2011 TDC - All Rights Reserved</li>
                        <li>Liên Hệ: 028 3897 0023 - itworks@gmail.com</li>
                    </ul>
                </div>
                <div class="col-md-3 footer__aboutus footer__footer">
                    <h6>Về IT Works</h6>
                    <ul>
                        <li><a href="#">Về chúng tôi</a></li>
                        <li><a href="#">Liên hệ</a></li>
                        <li><a href="#">Quy định sử dụng</a></li>
                        <li><a href="#">Cơ hội việc làm</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer__customer footer__footer">
                    <h6>Ứng viên</h6>
                    <ul>
                        <li><a href="#">Tìm việc IT</a></li>
                        <li><a href="#">Tạo CV</a></li>
                        <li><a href="#">Blog IT</a></li>
                        <li><a href="#">Cộng đồng</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer__employer footer__footer">
                    <h6>Ứng viên</h6>
                    <ul>
                        <li><a href="#">Đăng việc làm IT</a></li>
                        <li><a href="#">Tạo CV</a></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <!-- End Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('js/js.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>