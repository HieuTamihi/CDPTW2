@if(!Auth::check())
@extends('header')
@section('footer')
<div class="log__reg__page">
    <div class="container">
        <div class="row">
            <div class="page__log">
                <div class="title__log">
                    <h4>Welcome to...</h4>
                </div>
                <div class="introduce__log">
                    <p>Register / login now to discover IT jobs, outstanding
                        technology information and opportunities to receive
                        attractive gifts</p>
                </div>
                @if(Session()->get('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{Session()->get('message')}}
                </div>
                @endif
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <div class="form__log">
                    <div class="name__log">
                        <h4>LOGIN</h4>
                    </div>
                    <form action="{{route('login')}}" method="POST">
                        @csrf
                        <input type="text" placeholder="Email" class="email__log" name="email" value="{{old('email')}}">
                        @if ($errors->has('email'))
                        <strong class="text-danger">{{$errors->first('email')}}</strong>
                        @endif
                        <input type="password" placeholder="Password" class="pass__log" name="password">
                        @if ($errors->has('password'))
                        <strong class="text-danger">{{$errors->first('password')}}</strong>
                        @endif
                        <input type="submit" value="Login" class="btn login__btn">
                        <span class="btn btn reg__btn"><a href="{{route('register')}}" 
                        style="text-decoration: none;color:white;">Sign up</a></span>
                    </form>
                    <a href="{{asset('reset_pass')}}" class="link__forgot">Forgot password</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@endsection
@endif