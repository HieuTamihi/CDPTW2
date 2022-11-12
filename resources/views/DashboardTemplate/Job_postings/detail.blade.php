@extends('DashboardTemplate.dashboardHeader')
@section('main')
@if(Auth::check() && Auth::user()->role == 2)
die();
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        @if(Session::has('notify'))
            <div class="alert alert-success" style="text-align:center;">{{Session::get('notify')}}</div>
            @endif
            <div class="action" style="display: flex; float:right ">
                <a href="{{route('recruit',$customer->id)}}"><button class="btn btn-primary">Gửi email</button></a>
                <form action="{{route('RUEmployer.destroy',$customer->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Xóa</button>
                </form>
            </div> <br><br><br>
            <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                        <h3>Full name</h3>
                        <p>{{$customer->fullname}}</p>
                    </div>

                    <div class="form-group">
                        <h3>Email</h3>
                        <p>{{$customer->email}}</p>
                    </div>

                    <div class="form-group">
                        <h3>Phone Number</h3>
                        <p>{{$customer->phone_number}}</p>
                    </div>

                    <div class="form-group">
                        <h3>Date</h3>
                        <p>{{$customer->date}}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <h3>Address</h3>
                        <p>{{$customer->address}}</p>
                    </div>

                    <div class="form-group">
                        <h3>Gender</h3>
                        <p>{{$customer->gender}}</p>
                    </div>

                    <div class="form-group">
                        <h3>Favorite</h3>
                        <p>{{$customer->favorite}}</p>
                    </div>
                </div>
            </div>
    </section>
</div>
@endif
@endsection