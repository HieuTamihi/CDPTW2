@extends('header')
@section('footer')
<div class="log__reg__page">
    <div class="container">
        <div class="row">
            <div class="page__reg">
                <div class="form__reg">
                    <div class="name__log">
                        <h4>SIGN UP</h4>
                    </div><ul class="select__reg nav tab-nav"><li class="nav-item sl__employ" 
                        style="color: #fff;padding: 0px 6px;background: #404040;border: 1px solid #000;">
                            <a href="{{route('register')}}" class="nav-link">
                                <span id="color-text-em" style="color: #fff;">Employer</span>
                            </a>
                        </li><li class="nav-item sl__cus" 
                        style="color: #000;padding: 0px 6px;border: 1px solid #000;background: #fff">
                            <a href="{{route('registerCT')}}" class="nav-link active">
                                <span id="color-text-cus" style="color: #000;">Customer</span>
                            </a>
                        </li></ul>
                    @if(session('message'))
                    <span class="aler alert-danger">
                        <strong>{{session('message')}}</strong>
                    </span>
                    @endif
                    <div class="tab-content">
                        <div class="tab-pane active" id="form-employ">
                            <form action="{{route('register')}}" class="tab-pane active" method="POST">
                                @if(Session::has('message'))
                                <div class="alert alert-success">{{Session::get('message')}}</div>
                                @endif
                                @csrf
                                <span class="des__name">Name Company</span>
                                <input type="text" placeholder="Enter your name company" 
                                class="type__info__reg" name="name_company">
                                @if ($errors->has('name_company'))
                                <strong class="text-danger">{{$errors->first('name_company')}}</strong>
                                @endif
                                <span class="des__name">Address</span>
                                <input type="text" placeholder="Enter your address" class="type__info__reg" name="address">
                                @if ($errors->has('address'))
                                <strong class="text-danger">{{$errors->first('address')}}</strong>
                                @endif
                                <span class="des__name">Email</span>
                                <input type="text" placeholder="Enter your email" class="type__info__reg" name="email">
                                @if ($errors->has('email'))
                                <strong class="text-danger">{{$errors->first('email')}}</strong>
                                @endif
                                <span class="des__name">Password</span>
                                <input type="password" placeholder="Enter your password" 
                                class="type__info__reg" name="password">
                                @if ($errors->has('password'))
                                <strong class="text-danger">{{$errors->first('password')}}</strong>
                                @endif
                                <span class="des__name">Re-Password</span>
                                <input type="password" placeholder="Enter your re-password" class="type__info__reg" 
                                name="password_confirmation">
                                <span class="des__name">Phone number</span>
                                <input type="text" placeholder="Enter your phone number" class="type__info__reg" name="phone">
                                @if ($errors->has('phone'))
                                <strong class="text-danger">{{$errors->first('phone')}}</strong>
                                @endif  
                                <input type="submit" value="Sign up" class="btn reg__btn">
                                <span class="btn btn login__btn"><a href="{{route('login')}}" 
                                style="text-decoration: none;color:white;">Login</a></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div></div></div><br>
@endsection