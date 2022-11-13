@extends('DashboardTemplate.dashboardHeader')
@section('main')
@if(Auth::check())
@if(Auth::user()->role == 2)
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <h3>Name Company</h3>
                        <p>{{$showEmploy->name_company}}</p>
                    </div>
                    <div class="form-group">
                        <h3>image</h3>
                        <br>
                        <img src="{{asset('img/'.$showEmploy->image)}}" alt="" style="width: 100%;">
                        <br>
                    </div>
                    <div class="form-group">
                        <h3>Email</h3>
                        <p>{{$showEmploy->email}}</p>
                    </div>
                    <div class="form-group">
                        <h3>Phone Number</h3>
                        <p>{{$showEmploy->phone_number}}</p>
                    </div>
                    <div class="form-group">
                        <h3>Address</h3>
                        <p>{{$showEmploy->address}}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <h3>Website</h3>
                        <p>{{$showEmploy->website}}</p>
                    </div>

                    <div class="form-group">
                        <h3>Infor</h3>
                        <p>{{$showEmploy->infor}}</p>
                    </div>
                    <div class="form-group">
                        <h3>Responsibility</h3>
                        <p>{{$showEmploy->responsibility}}</p>
                    </div>
                    <div class="form-group">
                        <h3>Welfare</h3>
                        <p>{{$showEmploy->welfare}}</p>
                    </div>
                </div>
            </div>
            <a href="{{route('RUEmployer.edit',$showEmploy->id)}}">
                <button type="submit" class="btn btn-primary" style="float: right;">
                    <i class="fas fa-pencil-alt "></i>
                </button>
            </a>
            <a href="{{route('showlayout',Auth::user()->id)}}">
                <button class="btn btn-primary" style="float: right; transform: translateX(-20px);">Change Password</button>
            </a>
        </div>
    </section>
</div>
@endif
@endif
@endsection