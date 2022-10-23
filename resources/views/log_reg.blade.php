@extends('header')
@section('footer')
<div class="log__reg__page">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="page__log">
                    <div class="title__log">
                        <h4>Welcome to...</h4>
                    </div>
                    <div class="introduce__log">
                        <p>Register / login now to discover IT jobs, outstanding
                            technology information and opportunities to receive
                            attractive gifts</p>
                    </div>
                    <div class="form__log">
                        <div class="name__log">
                            <h4>LOGIN</h4>
                        </div>
                        <form action="{{asset('admin_homePage')}}">
                            <input type="text" placeholder="Email" class="email__log">
                            <input type="password" placeholder="Password" class="pass__log">
                            <input type="submit" value="Login" class="btn login__btn">
                        </form>
                        <a href="#" class="link__forgot">Forgot password</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="page__reg">
                    <div class="form__log">
                        <div class="name__log">
                            <h4>SIGN UP</h4>
                        </div>
                        <ul class="select__reg nav tab-nav">
                            <li class="nav-item sl__employ" id="select_employ"><a href="#form-employ" onclick="employ()" data-bs-toggle="tab" class="nav-link active"><span id="color-text-em">Employer</span></a></li>
                            <li class="nav-item sl__cus" id="select_cus"><a href="#form-cus" onclick="cus()" data-bs-toggle="tab" class="nav-link"><span id="color-text-cus">Customer</span></a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="form-employ">
                                <!-- PAGE Employer -->
                                <form action="" class="tab-pane active">
                                    <span class="des__name">Email</span>
                                    <input type="text" placeholder="Enter your email" class="type__info__reg">
                                    <span class="des__name">Password</span>
                                    <input type="password" placeholder="Enter your password" class="type__info__reg">
                                    <span class="des__name">Re-Password</span>
                                    <input type="password" placeholder="Enter your re-password" class="type__info__reg">
                                    <span class="des__name">Company name</span>
                                    <input type="text" placeholder="Enter your company" class="type__info__reg">
                                    <span class="des__name">Address</span>
                                    <input type="text" placeholder="Enter your address" class="type__info__reg">
                                    <span class="des__name">Phone number</span>
                                    <input type="text" placeholder="Enter your phone number" class="type__info__reg">
                                    <input type="submit" value="Sign up" class="btn reg__btn">
                                </form>
                                <!-- PAGE Employer -->
                            </div>
                            <div class="tab-pane" id="form-cus">
                                <!-- PAGE Customer -->
                                <form action="" class="tab-pane">
                                    <span class="des__name">Email</span>
                                    <input type="text" placeholder="Enter your email" class="type__info__reg">
                                    <span class="des__name">Phone number</span>
                                    <input type="text" placeholder="Enter your phone number" class="type__info__reg">
                                    <span class="des__name">Password</span>
                                    <input type="password" placeholder="Enter your password" class="type__info__reg">
                                    <span class="des__name">Re-Password</span>
                                    <input type="password" placeholder="Enter your re-password" class="type__info__reg">
                                    <input type="submit" value="Sign up" class="btn reg__btn">
                                </form>
                                <!-- PAGE Customer -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@endsection;