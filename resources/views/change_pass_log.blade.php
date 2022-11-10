@extends('header')
@section('footer')
<div class="change__pass1">
    <div class="container">
        <div class="title__change__pass">
            <h5>Change password</h5>
        </div>
        <form action="{{ route('update-password') }}" class="form__change1" method="POST">
            @csrf
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @elseif (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
            @endif
            <div class="input__old__pass1">
                <div class="lb__old__pass">
                    <label for="password">Old password</label>
                </div>
                <input type="password" name="old_password" id="password" required>
                <i class="fa-solid fa-eye" id="show_pass"></i>
                <i class="fa-solid fa-eye-slash" id="hide_pass"></i>
                @error('old_password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="input__new__pass1">
                <div class="lb__new__pass">
                    <label for="new-pass">New password</label>
                </div>
                <input type="password" name="new_password" id="new_password" required>
                <i class="fa-solid fa-eye" id="show_new"></i>
                <i class="fa-solid fa-eye-slash" id="hide_new"></i>
                @error('new_password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="input__confirm1">
                <div class="lb__confirm">
                    <label for="confirm-pass">Confirm new password</label>
                </div>
                <input type="password" name="new_password_confirmation" id="confirm_password" required>
                <i class="fa-solid fa-eye" id="show_confirm"></i>
                <i class="fa-solid fa-eye-slash" id="hide_confirm"></i>
            </div>
            <input type="submit" value="Confirm" class="btn btn-primary confirm__btn">
        </form>
    </div>
</div>
@endsection