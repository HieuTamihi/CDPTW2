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
                                    <a href="{{route('employer.show',$row->id)}}">
                                        <img class="intem-img" src="{{url('img')}}/{{$row->image}}" alt="">
                                    </a>
                                </div>
                                <div class="col-md-7 name-spotlight">
                                    <h3 class="title-spotlight">
                                        <a href="{{route('employer.show',$row->id)}}">{{$row->name_company}}</a>
                                    </h3>
                                    <div class="spotilght-txt">
                                        <p class="loca-spotlight">Seal Commerce is a Global Product Company that
                                            helps people sell
                                            better...
                                        </p>
                                        <div class="spotilght-txt-DC">
                                            <p class="loca-spotlight">{{$row->address}}</p>
                                        </div>
                                    </div>
                                    <div class="spotlight-btn">
                                        <a href="">Xem Thêm &raquo;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-md-2 intem-thume">
                        @foreach ($employer as $row)
                        <a class="intem-thume-img" href="{{route('employer.show',$row->id)}}">
                            <img src="{{url('img')}}/{{$row->image}}" alt="">
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4 hot-work">
                <div class="tit-recomm">
                    <h2>
                        <strong class="tit-recomm-txt">
                            <span class="tit-recomm-txt-emph">
                                Công Việc
                            </span>
                            Hot
                        </strong>
                    </h2>
                </div>
                <div id="hotid" class="hot-wotk-intem">
                    <ul id="customid" class="supper-hot-job">
                        @foreach($job as $name)
                        <li>
                            <span class="tags"><strong class="tags-txt">{{$name->name_company}}</strong></span>
                            <br><a href="{{route('employer.show',$name->id)}}">{{$name->title}}</a>
                            <p class="job-salary-view">{{$name->salary}}</p>
                        </li>
                        @endforeach
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
            @foreach ($employer as $row)
            <div class="col-md-2 cont-bottum-main-item">
                <a href="{{route('employer.show',$row->id)}}">
                    <div class="cont-bottum-main-item-img">
                        <img src="{{url('img')}}/{{$row->image}}" alt="">
                    </div>
                </a>
                <div class="cont-bottum-main-item-txt">
                    <p>{{$row->name_company}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>
@endsection