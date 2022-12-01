@extends('header')
@section('footer')
@if(Auth::check() && Auth::user()->role == 3)
<div class="form__createcv">
    <div class="container">
        @if(Session::has('message'))
        <div class="alert alert-success">{{Session::get('message')}}</div>
        @elseif (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
        @endif
        <form action="{{route('cv.update',$cv->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <p class="title" style="color:red;">Tên CV(*)</p>
            <div class="resume_form">
                <div class="input__field">
                    <input class="input__input" value="{{$cv->namecv}}" name="namecv" type="text" placeholder="Vui lòng nhập tên CV" required style="width: 100%;">
                    @if($errors->has('namecv'))
                    <strong class="text-danger">{{$errors->first('namecv')}}</strong>
                    @endif
                </div>
            </div>
            <p class="title">Thông tin cá nhân</p>
            <div class="resume_form">
                <div class="input__field"> <label for="">Ảnh 3x4 (*)</label>
                    <img src="{{asset('img/'.$cv->avatar)}}" alt="" height="130px">
                    <input class="input__input" type="file" accept="image/*" name="avatar">
                    @if($errors->has('avatar'))
                    <strong class="text-danger">{{$errors->first('avatar')}}</strong>
                    @endif
                </div>
                <div class="input__field">
                    <label for="">Họ và tên (*)</label>
                    <input class="input__input" value="{{$cv->fullname}}" name="fullname" type="text" placeholder="Vui lòng nhập họ và tên" required>
                    @if($errors->has('fullname'))
                    <strong class="text-danger">{{$errors->first('fullname')}}</strong>
                    @endif
                </div>
                <div class="input__field"> <label for="">Vị trí ứng tuyển (*)</label>
                    <input class="input__input" value="{{$cv->apply_position}}" name="apply_position" type="text" placeholder="Vui lòng chọn vị trí ứng tuyển" required>
                    @if($errors->has('apply_position'))
                    <strong class="text-danger">{{$errors->first('apply_position')}}</strong>
                    @endif
                </div>
                <div class="input__field"> <label for="">Email (*)</label>
                    <input class="input__input" value="{{$cv->email}}" name="email" type="email" placeholder="Vui lòng nhập email" required>
                    @if($errors->has('email'))
                    <strong class="text-danger">{{$errors->first('email')}}</strong>
                    @endif
                </div>
                <div class="input__field"> <label for="">Số điện thoại (*)</label>
                    <input class="input__input" value="{{$cv->phone_number}}" name="phone_number" type="number" placeholder="Vui lòng nhập số điện thoại" required>
                    @if($errors->has('phone_number'))
                    <strong class="text-danger">{{$errors->first('phone_number')}}</strong>
                    @endif
                </div>
                <div class="input__field">
                    <label for="">Ngày sinh (*)</label>
                    <input class="input__input" value="{{$cv->date}}" type="date" name="date" required>
                    @if($errors->has('date'))
                    <strong class="text-danger">{{$errors->first('date')}}</strong>
                    @endif
                </div>
                <p class="title">Giới thiệu bản thân</p>
                <div class="input__field">
                    <label for="">Giới thiệu bản thân</label>
                    <textarea name="introduce" id="" cols="42" rows="3">{{$cv->introduce}}</textarea>
                    @if($errors->has('introduce'))
                    <strong class="text-danger">{{$errors->first('introduce')}}</strong>
                    @endif
                </div>
                <div class="input__field">
                    <label for="">Kinh nghiệm làm việc</label>
                    <textarea name="exp_work" id="" cols="42" rows="3">{{$cv->exp_work}}</textarea>
                    @if($errors->has('exp_work'))
                    <strong class="text-danger">{{$errors->first('exp_work')}}</strong>
                    @endif
                </div>
                <p class="title">Học vấn</p>
                <div class="input__field"> <label for="">Tên trường theo học (*)</label>
                    <input class="input__input" value="{{$cv->school_name}}" type="text" name="school_name" placeholder="Vui lòng chọn trường theo học" required>
                    @if($errors->has('school_name'))
                    <strong class="text-danger">{{$errors->first('school_name')}}</strong>
                    @endif
                </div>
                <div class="input__field"> <label for="">Thời gian học tập (*)</label>
                    <input class="input__input" value="{{$cv->learn_time}}" name="learn_time" type="text" required>
                    @if($errors->has('learn_time'))
                    <strong class="text-danger">{{$errors->first('learn_time')}}</strong>
                    @endif
                </div>
                <div class="input__field"> <label for="">Ngành học (*)</label>
                    <input class="input__input" value="{{$cv->majors}}" name="majors" type="text" placeholder="Vui lòng chọn ngành học" required>
                    @if($errors->has('majors'))
                    <strong class="text-danger">{{$errors->first('majors')}}</strong>
                    @endif
                </div>
                <div class="input__field">
                    <label for="">Thông tin khác</label>
                    <textarea name="infor_other" id="" cols="42" rows="3">{{$cv->infor_other}}</textarea>
                    @if($errors->has('infor_other'))
                    <strong class="text-danger">{{$errors->first('infor_other')}}</strong>
                    @endif
                </div>
                <div class="input__button">
                    <input type="submit" class="btn btn-danger" value="CẬP NHẬT">
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Button trigger modal -->
@endif
@endsection