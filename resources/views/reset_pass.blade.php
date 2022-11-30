@extends('header')
@section('footer')
<div class="reset__pass">
    <div class="container">
        <div class="title__page">
            <h4>Reset password</h4>
        </div>
        <div class="des__page">
            <p>Enter the information below and make sure you enter the
                correct email for which you need to change your
                password. We will email you information to change your
                password.
            </p>
        </div>
        <div class="form__reset">
            <form action="{{url('recover_pass')}}" method="POST" novalidate="">
                @csrf
                @if(session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
                @elseif(session('error'))
                <div class="alert alert-danger">
                    {{session('error')}}
                </div>
                @endif
                <input type="email" placeholder="Email" name="email" class="input__email" value="{{old('email')}}" required>
                <span class="text-danger">@error('email'){{$message}}@enderror</span>
                <input type="submit" value="Send a link to create a password" class="btn btn-primary reset__btn">
            </form>
        </div>
    </div>
</div>
@endsection