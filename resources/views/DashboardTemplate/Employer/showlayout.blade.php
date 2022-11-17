@extends('DashboardTemplate.dashboardHeader')
@section('main')
@if(Auth::check())
@if(Auth::user()->role == 2)
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            @if(Session::has('error'))
            <div class="alert alert-success" style="text-align:center;">{{Session::get('error')}}</div>
            @endif
            <form action="{{route('changepass',Auth::user()->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="old_pass">
                    <h4>Old Password</h4>
                    <input type="password" name="old_pass"> <br>
                    @if ($errors->has('old_pass'))
                    <strong class="text-danger">{{$errors->first('old_pass')}}</strong>
                    @endif
                </div>
                <div class="new_pass">
                    <h4>New Password</h4>
                    <input type="password" name="new_pass" id=""> <br>
                    @if ($errors->has('new_pass'))
                    <strong class="text-danger">{{$errors->first('new_pass')}}</strong>
                    @endif
                </div>
                <div class="re_new_pass">
                    <h4>Re-New password</h4>
                    <input type="password" name="new_pass_confirmation" id=""> <br>
                    @if ($errors->has('new_pass_confirmation'))
                    <strong class="text-danger">{{$errors->first('new_pass_confirmation')}}</strong>
                    @endif
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Change Pass</button>
            </form>
        </div>
    </section>
</div>
@endif
@endif
@endsection