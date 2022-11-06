@extends('header')
@section('footer')
<div class="log__reg__page">
    <div class="container">
        <div class="row">
            <div class="page__reg">
                <div class="form__reg">
                    <div class="name__log">
                        <h4>SIGN UP</h4>
                    </div>
                    <ul class="select__reg nav tab-nav">
                        <li class="nav-item sl__employ" id="select_employ"><a href="#form-employ" onclick="employ()" data-bs-toggle="tab" class="nav-link active"><span id="color-text-em">Employer</span></a></li>
                        <li class="nav-item sl__cus" id="select_cus"><a href="#form-cus" onclick="cus()" data-bs-toggle="tab" class="nav-link"><span id="color-text-cus">Customer</span></a></li>
                    </ul>
                    @if(session('message'))
                    <span class="aler alert-danger">
                        <strong>{{session('message')}}</strong>
                    </span>
                    @endif
                    <div class="tab-content">
                        <div class="tab-pane active" id="form-employ">
                            <!-- PAGE Employer -->
                            <form action="" class="tab-pane active" method="POST">
                                @if(Session::has('message'))
                                <div class="alert alert-success">{{Session::get('message')}}</div>
                                @endif
                                @csrf
                                <span class="des__name">Email</span>
                                <input type="text" placeholder="Enter your email" class="type__info__reg" name="email">
                                @if ($errors->has('email'))
                                <strong class="text-danger">{{$errors->first('email')}}</strong>
                                @endif
                                <span class="des__name">Password</span>
                                <input type="password" placeholder="Enter your password" class="type__info__reg" name="password">
                                @if ($errors->has('password'))
                                <strong class="text-danger">{{$errors->first('password')}}</strong>
                                @endif
                                <span class="des__name">Re-Password</span>
                                <input type="password" placeholder="Enter your re-password" class="type__info__reg" name="password_confirmation">
                                <span class="des__name">Phone number</span>
                                <input type="text" placeholder="Enter your phone number" class="type__info__reg" name="phone">
                                @if ($errors->has('phone'))
                                <strong class="text-danger">{{$errors->first('phone')}}</strong>
                                @endif
                                <input type="hidden" value="3" name="role">
                                <input type="hidden" value="1" name="status">
                                <input type="hidden" value="{{(int)$user_id->user_id}}" name="user_id">
                                <input type="submit" value="Sign up" class="btn reg__btn">
                                <span class="btn btn login__btn"><a href="{{route('login')}}" style="text-decoration: none;color:white;">Login</a></span>
                            </form>
                            <!-- PAGE Employer -->
                        </div>
                        <div class="tab-pane" id="form-cus">
                            <!-- PAGE Customer -->
                            <form action="{{route('register')}}" class="tab-pane" method="POST">
                                @if(Session::has('message'))
                                <div class="alert alert-success">{{Session::get('message')}}</div>
                                @endif
                                @csrf
                                <span class="des__name">Email</span>
                                <input type="text" placeholder="Enter your email" class="type__info__reg" name="email">
                                @if ($errors->has('email'))
                                <strong class="text-danger">{{$errors->first('email')}}</strong>
                                @endif
                                <span class="des__name">Phone number</span>
                                <input type="text" placeholder="Enter your phone number" class="type__info__reg" name="phone">
                                @if ($errors->has('phone'))
                                <strong class="text-danger">{{$errors->first('phone')}}</strong>
                                @endif
                                <span class="des__name">Password</span>
                                <input type="password" placeholder="Enter your password" class="type__info__reg" name="password">
                                @if ($errors->has('password'))
                                <strong class="text-danger">{{$errors->first('password')}}</strong>
                                @endif
                                <span class="des__name">Confirm Password</span>
                                <input type="password" class="form-control" placeholder="Confirm Password" value="" name="password_confirmation" />
                                <input type="hidden" value="2" name="role">
                                <input type="hidden" value="1" name="status">
                                <input type="submit" value="Sign up" class="btn reg__btn">
                                <span class="btn btn login__btn"><a href="{{route('login')}}" style="text-decoration: none;color:white;">Login</a></span>
                            </form>
                            <!-- PAGE Customer -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@endsection;