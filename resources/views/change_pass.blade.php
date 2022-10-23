@extends('header')
@section('footer')
<div class="change__pass">
    <div class="container">
        <div class="title__page">
            <h4>Change password</h4>
        </div>
        <div class="form__reset">
            <form action="">
                <div class="input__email__change">
                    <label for="email">Email</label>
                    <input type="text" class="type__email">
                </div>
                <div class="input__pass__change">
                    <label for="email">Password</label>
                    <input type="password" class="type__pass">
                </div>
                <div class="input__confirm__change">
                    <label for="email">Confirm password</label>
                    <input type="password" class="type__confirm">
                </div>
                <input type="submit" value="Change" class="btn btn-primary change__btn">
            </form>
        </div>
    </div>
</div>
@endsection