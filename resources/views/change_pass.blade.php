@extends('header')
@section('footer')
<div class="change__pass">
    <div class="container">
        <div class="title__page">
            <h4>Change password</h4>
        </div>
        <div class="form__reset">
            @if(Session()->get('message'))
            <div class="alert alert-success" role="alert">
                {{Session()->get('message')}}
            </div>
            @endif
            @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
            @endif
            @php
            $token = $_GET['token'];
            $email = $_GET['email'];
            @endphp
            <form action="{{url('reset-new-pass')}}" method="POST">
                @csrf
                <input type="hidden" name="email" value="{{$email}}">
                <input type="hidden" name="token" value="{{$token}}">
                <div class="input__pass__change">
                    <label for="email">Password</label>
                    <input type="password" name="password" class="type__pass" required>
                </div>
                <div class="input__confirm__change">
                    <label for="email">Confirm password</label>
                    <input type="password" name="password_confirmation" class="type__confirm" required>
                </div>
                <input type="submit" value="Change" class="btn btn-primary change__btn">
            </form>
        </div>
    </div>
</div>
@endsection
