@extends('DashboardTemplate.dashboardHeader')
@section('main')
@if(Auth::check())
@if(Auth::user()->role == 2)
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <form action="{{route('RUEmployer.update',$showEmploy->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @if(Session::has('notify'))
                <div class="alert alert-success" style="text-align:center;">{{Session::get('notify')}}</div>
                @endif
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <h3>Name Company</h3>
                            <input type="text" name="name_company" class="form-control" value="{{$showEmploy->name_company}}">
                        </div>
                        <div class="form-group">
                            <h3>image</h3>
                            <img src="{{asset('img/'.$showEmploy->image)}}" alt="" style="width: 100%;">
                            <br>
                            <br>
                            <input type="file" name='image_upload' accept="image/*">
                            <br>
                            @if($errors->has('image_upload'))
                            <strong class="text-danger">{{$errors->first('image_upload')}}</strong>
                            @endif
                        </div>
                        <div class="form-group">
                            <h3>Email</h3>
                            <input type="text" name="email" class="form-control" value="{{$showEmploy->email}}">
                            @if ($errors->has('email'))
                            <strong class="text-danger">{{$errors->first('email')}}</strong>
                            @endif
                        </div>
                        <div class="form-group">
                            <h3>Phone Number</h3>
                            <input type="text" name="phone_number" class="form-control" value="{{$showEmploy->phone_number}}" required>
                            @if ($errors->has('phone_number'))
                            <strong class="text-danger">{{$errors->first('phone_number')}}</strong>
                            @endif
                        </div>
                        <div class="form-group">
                            <h3>Address</h3>
                            <textarea name="address" id="" cols="72" rows="3">{{$showEmploy->address}}</textarea>
                            @if ($errors->has('address'))
                            <strong class="text-danger">{{$errors->first('address')}}</strong>
                            @endif
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h3>Website</h3>
                            <input type="text" name="website" class="form-control" value="{{$showEmploy->website}}">
                            @if ($errors->has('website'))
                            <strong class="text-danger">{{$errors->first('website')}}</strong>
                            @endif
                        </div>
                        <div class="form-group">
                            <h3>Infor</h3>
                            <textarea name="infor" id="" cols="72" rows="8">{{$showEmploy->infor}}</textarea>
                            @if ($errors->has('infor'))
                            <strong class="text-danger">{{$errors->first('infor')}}</strong>
                            @endif
                        </div>
                        <div class="form-group">
                            <h3>Responsibility</h3>
                            <textarea name="responsibility" id="" cols="72" rows="2">{{$showEmploy->responsibility}}</textarea>
                            @if ($errors->has('responsibility'))
                            <strong class="text-danger">{{$errors->first('responsibility')}}</strong>
                            @endif
                        </div>
                        <div class="form-group">
                            <h3>Welfare</h3>
                            <textarea name="welfare" id="" cols="72" rows="3">{{$showEmploy->welfare}}</textarea>
                            @if ($errors->has('welfare'))
                            <strong class="text-danger">{{$errors->first('welfare')}}</strong>
                            @endif
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" style="float:right;">
                    <i class="fas fa-pencil-alt "></i>
                </button>
            </form>
        </div>
    </section>
</div>
@endif
@endif
@endsection