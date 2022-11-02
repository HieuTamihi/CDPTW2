@extends('header')
@section('footer')
    <!-- Search -->
    <div class="search container">
        <form action="{{ route('search') }}" method="GET">
            <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
            <input type="text" class="search__input form-control" name="keyword" placeholder="Nhập từ khoá tìm kiếm">
            <button type="submit" class="search__btn btn btn-danger">Tìm kiếm</button>
        </form>
    </div>
    <div class="container-fluid">
        <section id="section-container" class="cont-top">
            <div class="row main-slide-home-page">
                <div class="col-md-8 intem-slide">
                    <div class="tit-recomm">
                        <h2>
                            <strong class="tit-recomm-txt">
                                <span class="tit-recomm-txt-emph">
                                    Công Ty
                                </span>
                                Nổi Bật
                            </strong>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-md-10 intem-main">
                            {{ csrf_field() }}
                            @foreach ($employer as $row)
                                <div class="intem-main-child">
                                    <div class="row">
                                        <div class="col-md-5 intem-slide-img">
                                            <a href="#">
                                                <img class="intem-img"
                                                    src="{{ asset('img/hinh-anh-van-phong-cong-ty-casanova-mccann-2.png') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="col-md-7 name-spotlight">
                                            <h3 class="title-spotlight">
                                                <a href="#">{{ $row->name_company }}</a>
                                            </h3>
                                            <div class="spotilght-txt">
                                                <p class="loca-spotlight">Seal Commerce is a Global Product Company that
                                                    helps people sell
                                                    better...
                                                </p>
                                                <div class="spotilght-txt-DC">
                                                    <p class="loca-spotlight">Hà Nội</p>
                                                </div>
                                            </div>
                                            <div class="spotlight-btn">
                                                <a href="">Xem Thêm &raquo;</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="intem-main-child">
                                <div class="row">
                                    <div class="col-md-5 intem-slide-img">
                                        <a href="">
                                            <img class="intem-img"
                                                src="{{ asset('img/hinh-anh-van-phong-cong-ty-casanova-mccann-2.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-7 name-spotlight">
                                        <h3 class="title-spotlight">
                                            <a href="">Tên Công IT</a>
                                        </h3>
                                        <div class="spotilght-txt">
                                            <p class="loca-spotlight">Seal Commerce is a Global Product Company that
                                                helps people sell
                                                better...
                                            </p>
                                            <div class="spotilght-txt-DC">
                                                <p class="loca-spotlight">Hà Nội</p>
                                            </div>
                                        </div>
                                        <div class="spotlight-btn">
                                            <a href="">Xem Thêm &raquo;</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="intem-main-child">
                                <div class="row">
                                    <div class="col-md-5 intem-slide-img">
                                        <a href="">
                                            <img class="intem-img"
                                                src="{{ asset('img/hinh-anh-van-phong-cong-ty-casanova-mccann-2.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-7 name-spotlight">
                                        <h3 class="title-spotlight">
                                            <a href="">Tên Công IT</a>
                                        </h3>
                                        <div class="spotilght-txt">
                                            <p class="loca-spotlight">Seal Commerce is a Global Product Company that
                                                helps people sell
                                                better...
                                            </p>
                                            <div class="spotilght-txt-DC">
                                                <p class="loca-spotlight">Hà Nội</p>
                                            </div>
                                        </div>
                                        <div class="spotlight-btn">
                                            <a href="">Xem Thêm &raquo;</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 intem-thume">
                            <a class="intem-thume-img" href="">
                                <img src="{{ asset('img/240656610_1057724158393576_5957262079858008168_n.jpg') }}"
                                    alt="">
                            </a>
                            <a class="intem-thume-img" href="">
                                <img src="{{ asset('img/240656610_1057724158393576_5957262079858008168_n.jpg') }}"
                                    alt="">
                            </a>
                            <a class="intem-thume-img" href="">
                                <img src="{{ asset('img/240656610_1057724158393576_5957262079858008168_n.jpg') }}"
                                    alt="">
                            </a>
                            <a class="intem-thume-img" href="">
                                <img src="{{ asset('img/240656610_1057724158393576_5957262079858008168_n.jpg') }}"
                                    alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 hot-work">
                    <div class="tit-recomm">
                        <h2>
                            <strong class="tit-recomm-txt">
                                <span class="tit-recomm-txt-emph">
                                    Công Ty
                                </span>
                                Nổi Bật
                            </strong>
                        </h2>
                    </div>
                    <div id="hotid" class="hot-wotk-intem">
                        <ul id="customid" class="supper-hot-job">
                            <li>
                                <span class="tags"><strong class="tags-txt">VietCredit</strong></span>
                                <br><a href="{{ asset('detail_page') }}"> Senior .NET Engineer - 1-month joining bonus </a>
                                <p class="job-salary-view"> Thương lượng </p>
                            </li>
                            <li>
                                <span class="tags"><strong class="tags-txt">VietCredit</strong></span>
                                <br><a href="{{ asset('detail_page') }}"> Senior .NET Engineer - 1-month joining bonus </a>
                                <p class="job-salary-view"> Thương lượng </p>
                            </li>
                            <li>
                                <span class="tags"><strong class="tags-txt">VietCredit</strong></span>
                                <br><a href="{{ asset('detail_page') }}"> Senior .NET Engineer - 1-month joining bonus
                                </a>
                                <p class="job-salary-view"> Thương lượng </p>
                            </li>
                            <li>
                                <span class="tags"><strong class="tags-txt">VietCredit</strong></span>
                                <br><a href="{{ asset('detail_page') }}"> Senior .NET Engineer - 1-month joining bonus
                                </a>
                                <p class="job-salary-view"> Thương lượng </p>
                            </li>
                        </ul>
                        <ul id="customid" class="supper-hot-job">
                            <li>
                                <span class="tags"><strong class="tags-txt">VietCredit</strong></span>
                                <br><a href="{{ asset('detail_page') }}"> Senior .NET Engineer - 1-month joining bonus
                                </a>
                                <p class="job-salary-view"> Thương lượng </p>
                            </li>
                            <li>
                                <span class="tags"><strong class="tags-txt">VietCredit</strong></span>
                                <br><a href="{{ asset('detail_page') }}"> Senior .NET Engineer - 1-month joining bonus
                                </a>
                                <p class="job-salary-view"> Thương lượng </p>
                            </li>
                            <li>
                                <span class="tags"><strong class="tags-txt">VietCredit</strong></span>
                                <br><a href="{{ asset('detail_page') }}"> Senior .NET Engineer - 1-month joining bonus
                                </a>
                                <p class="job-salary-view"> Thương lượng </p>
                            </li>
                            <li>
                                <span class="tags"><strong class="tags-txt">VietCredit</strong></span>
                                <br><a href="{{ asset('detail_page') }}"> Senior .NET Engineer - 1-month joining bonus
                                </a>
                                <p class="job-salary-view"> Thương lượng </p>
                            </li>
                        </ul>
                        <ul id="customid" class="supper-hot-job">
                            <li>
                                <span class="tags"><strong class="tags-txt">VietCredit</strong></span>
                                <br><a href="{{ asset('detail_page') }}"> Senior .NET Engineer - 1-month joining bonus
                                </a>
                                <p class="job-salary-view"> Thương lượng </p>
                            </li>
                            <li>
                                <span class="tags"><strong class="tags-txt">VietCredit</strong></span>
                                <br><a href=""> Senior .NET Engineer - 1-month joining bonus </a>
                                <p class="job-salary-view"> Thương lượng </p>
                            </li>
                            <li>
                                <span class="tags"><strong class="tags-txt">VietCredit</strong></span>
                                <br><a href=""> Senior .NET Engineer - 1-month joining bonus </a>
                                <p class="job-salary-view"> Thương lượng </p>
                            </li>
                            <li>
                                <span class="tags"><strong class="tags-txt">VietCredit</strong></span>
                                <br><a href=""> Senior .NET Engineer - 1-month joining bonus </a>
                                <p class="job-salary-view"> Thương lượng </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="cont-bottum">
            <div class="tit-recomm">
                <h2>
                    <strong class="tit-recomm-txt">
                        Nhà Tuyển Dụng Nổi Bật
                    </strong>
                </h2>
            </div>
            <div class="row cont-bottum-main">
                <div class="col-md-2 cont-bottum-main-item">
                    <a href="">
                        <div class="cont-bottum-main-item-img">
                            <img src="./public/img/240656610_1057724158393576_5957262079858008168_n.jpg" alt="">
                        </div>
                    </a>
                    <div class="cont-bottum-main-item-txt">
                        <p>Công ty cổ phần</p>
                    </div>
                </div>
                <div class="col-md-2 cont-bottum-main-item">
                    <a href="">
                        <div class="cont-bottum-main-item-img">
                            <img src="./public/img/240656610_1057724158393576_5957262079858008168_n.jpg" alt="">
                        </div>
                    </a>
                    <div class="cont-bottum-main-item-txt">
                        <p>Công ty cổ phần</p>
                    </div>
                </div>
                <div class="col-md-2 cont-bottum-main-item">
                    <a href="">
                        <div class="cont-bottum-main-item-img">
                            <img src="./public/img/240656610_1057724158393576_5957262079858008168_n.jpg" alt="">
                        </div>
                    </a>
                    <div class="cont-bottum-main-item-txt">
                        <p>Công ty cổ phần</p>
                    </div>
                </div>
                <div class="col-md-2 cont-bottum-main-item">
                    <a href="">
                        <div class="cont-bottum-main-item-img">
                            <img src="./public/img/240656610_1057724158393576_5957262079858008168_n.jpg" alt="">
                        </div>
                    </a>
                    <div class="cont-bottum-main-item-txt">
                        <p>Công ty cổ phần</p>
                    </div>
                </div>
                <div class="col-md-2 cont-bottum-main-item">
                    <a href="">
                        <div class="cont-bottum-main-item-img">
                            <img src="./public/img/240656610_1057724158393576_5957262079858008168_n.jpg" alt="">
                        </div>
                    </a>
                    <div class="cont-bottum-main-item-txt">
                        <p>Công ty cổ phần</p>
                    </div>
                </div>
                <div class="col-md-2 cont-bottum-main-item">
                    <a href="">
                        <div class="cont-bottum-main-item-img">
                            <img src="./public/img/240656610_1057724158393576_5957262079858008168_n.jpg" alt="">
                        </div>
                    </a>
                    <div class="cont-bottum-main-item-txt">
                        <p>Công ty cổ phần</p>
                    </div>
                </div>
                <div class="col-md-2 cont-bottum-main-item">
                    <a href="">
                        <div class="cont-bottum-main-item-img">
                            <img src="./public/img/240656610_1057724158393576_5957262079858008168_n.jpg" alt="">
                        </div>
                    </a>
                    <div class="cont-bottum-main-item-txt">
                        <p>Công ty cổ phần</p>
                    </div>
                </div>
                <div class="col-md-2 cont-bottum-main-item">
                    <a href="">
                        <div class="cont-bottum-main-item-img">
                            <img src="./public/img/240656610_1057724158393576_5957262079858008168_n.jpg" alt="">
                        </div>
                    </a>
                    <div class="cont-bottum-main-item-txt">
                        <p>Công ty cổ phần</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
