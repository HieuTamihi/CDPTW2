@extends('header')
@section('footer')
<!-- Search -->
<div class="search container">
    <form action="">
        <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
        <input type="text" class="search__input form-control" placeholder="Nhập từ khoá tìm kiếm">
        <button type="submit" class="search__btn btn btn-danger">Tìm kiếm</button>
    </form>
</div>
<div class="container">
    <div class="detail__body">
        <div class="row">
            <div class="col-12 col-xl-9 detail_body__left">
                <div class="information">
                    <div class="information__logo" style="width:35%;">
                        <img src="{{asset('img/'.$detail->image)}}" alt="" >
                    </div>
                    <div class="information__content">
                        <p>{{$detail->name_company}}</p>
                    </div>
                </div>
                <div class="navi">
                    <a href="#CV">
                        <h6>Về công ty</h6>
                    </a>
                    <a href="#responsibility">
                        <h6>Công việc</h6>
                    </a>
                    <h6>Chia sẻ</h6>
                    <h6 class="navi__fol">Theo dõi</h6>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-12 col-xl-9 content__left">
                            @foreach($relate as $value)
                            <h4>{{$value->title}}</h4>
                            <p>{{$value->salary}}</p>
                            <a href="#" class="font-size_a">
                                <p>Đăng nhập để xem mức lương</p>
                            </a>
                            <p><?php echo str_replace(' , ','<p>',$detail->infor) ?></p>
                            </p>
                            <h2>Trách nhiệm công việc:</h2>
                            <div class="content__left__responsibility" id="responsibility">
                                <ul>
                                    <li><?php echo str_replace(' , ','<li>',$detail->responsibility) ?></li>
                                </ul>
                            </div>
                            <h2>Kỹ năng & Chuyên môn:</h2>
                            <div class="content__left__specialize">
                                <ul>
                                    <li><?php echo str_replace(', ','<li>',$value->required) ?></li>
                                </ul>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-12 col-xl-3 content__right">
                            <button type=" button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Ứng tuyển ngay</button>
                            <p class="text_align">Hoặc</p>
                            <a href="#" class="format_a text_align">
                                <button type=" button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Tạo CV Ứng Tuyển
                                </button>
                            </a>
                            @foreach($relate as $value)
                            <p class="text_align">{{$date - date('d',strtotime($value->created_at))}} ngày trước</p>
                            @endforeach
                            <h6>Địa điểm</h6>
                            <p>{{$detail->address}}</p>
                            <h6>Số năm kinh nghiệm</h6>
                            @foreach($relate as $value)
                            <p>{{$value->experience}}</p>
                            <h6>Loại hình</h6>
                            <p class="border_type">{{$value->type}}</p>
                            <h6>Kỹ năng</h6>
                            <div class="content__right__skill">
                                <p><?php echo str_replace(', ','<p>',$value->skill) ?></p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 col-xl-3 detail_body__right">
                <h6>Website</h6>
                <a href="{{$detail->website}}">
                    <p>{{$detail->website}}</p>
                </a>
                <h6>Địa điểm</h6>
                <p>{{$detail->address}}</p>
                <h6>Các công nghệ sử dụng</h6>
                @foreach($relate as $value)
                <div class="detail_body__right__skill">
                    <p><?php echo str_replace(' , ','<p>',$value->skill) ?></p>
                </div>
                @endforeach
                <!-- <h6>Quốc tịch công ty</h6>
                <div class="detail_body__right__img"><img src="{{asset('img/Vietnam.png')}}" alt="">
                    <p>Việt Nam</p>
                </div> -->
                <h6>Phúc lợi dành cho bạn</h6>
                <p><?php echo str_replace(' , ','<p>',$detail->welfare) ?></p>
            </div>
         
        </div>
        <div class="row" id="CV">
            <div class="col-12 col-xl-9">
                <div class="list_word">
                  @foreach($job_relate as $value)
                    <a href="{{route('employer.show',$value->id)}}"><h5>{{$value->title}}</h5></a>
                    <a href="#" class="font-size_a">
                        <p>Đăng nhập để xem mức lương</p>
                    </a>
                    <div class="list_word__skill">
                        <p><?php echo str_replace(' , ','<p>',$value->skill) ?></p>
                        <p>JavaScript</p>
                        <p>Solution Architect</p>
                    </div>
                    <div class="list_word__recruiment">
                        <a href="#">Ứng tuyển</a> 
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-xl-3"></div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bạn đang ứng tuyển tại công ty TDC</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="input__field d-flex">
                            <label for="">Họ và tên</label>
                            <input class="input__input form-control" type="text" placeholder="Vui lòng nhập họ và tên">
                        </div>
                        <div class="input__field d-flex">
                            <label for="">Địa chỉ</label>
                            <input class="input__input form-control" type="text" placeholder="Vui lòng nhập địa chỉ">
                        </div>
                        <div class="input__field d-flex">
                            <label for="">Email</label>
                            <input class="input__input form-control" type="email" placeholder="Vui lòng nhập email">
                        </div>
                        <div class="input__field d-flex">
                            <label for="">Số điện thoại</label>
                            <input class="input__input form-control" type="tel"
                                placeholder="Vui lòng nhập số điện thoại">
                        </div>
                        <div class="input__field d-flex">
                            <label for="">Chọn CV</label>
                            <input class="input__input" type="file">
                        </div>
                        <div class="input__field d-flex">
                            <label for="">Giới thiệu bản thân</label>
                            <textarea name="" id="" cols="100" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="createCV">
                    <span>Nếu bạn chưa có CV, </span><a href="">tạo CV tại đây</a>
                </div>
                <div class=" modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection;