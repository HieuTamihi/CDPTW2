@extends('header')
@section('footer')
@if(Auth::check())
<div class="form__createcv">
    <div class="container">
        @foreach($viewCV as $item)
        <p class="title" style="color: red;">Tên CV</p>
        <strong>
            <h5>{{$item->namecv}}</h5>
        </strong>
        <p class="title">Thông tin cá nhân</p>
        <div class="resume_form">
            <div class="input__field"> <label for="">Ảnh 3x4</label>
                <img src="{{asset('img/'.$item->avatar)}}" alt="" height="150px">
            </div>
            <div class="input__field">
                <label for="">Họ và tên</label>
                <p>{{$item->fullname}}</p>
            </div>
            <div class="input__field"> <label for="">Vị trí ứng tuyển</label>
                <p>{{$item->apply_position}}</p>
            </div>
            <div class="input__field"> <label for="">Email</label>
                <p>{{$item->email}}</p>
            </div>
            <div class="input__field"> <label for="">Số điện thoại</label>
                <p>{{$item->phone}}</p>
            </div>
            <div class="input__field">
                <label for="">Ngày sinh</label>
                <p>{{$item->date}}</p>
            </div>
            <p class="title">Giới thiệu bản thân</p>
            <div class="input__field">
                <label for="">Giới thiệu bản thân</label>
                <p>@if($item->introduce == null)
                    Không có
                    @else
                    {{$item->introduce}}
                    @endif
                </p>
            </div>
            <div class="input__field">
                <label for="">Kinh nghiệm làm việc</label>
                <p>{{$item->exp_work}}</p>
            </div>
            <p class="title">Học vấn</p>
            <div class="input__field"> <label for="">Tên trường theo học</label>
                <p>{{$item->school_name}}</p>
            </div>
            <div class="input__field"> <label for="">Thời gian học tập</label>
                <p>{{$item->learn_time}}</p>
            </div>
            <div class="input__field"> <label for="">Ngành học</label>
                <p>{{$item->majors}}</p>
            </div>
            <div class="input__field">
                <label for="">Thông tin khác</label>
                <p>{{$item->infor_other}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- Button trigger modal -->
@endif
@endsection