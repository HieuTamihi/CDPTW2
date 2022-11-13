@extends('DashboardTemplate.dashboardHeader')
@section('main')
@if(Auth::check() && Auth::user()->role == 2)
die();
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
        @if(Session::has('notify'))
            <div class="alert alert-success" style="text-align:center;">{{Session::get('notify')}}</div>
            @endif
            <a href="{{route('CRUDJobByEmployer.index')}}"><button class="btn btn-primary" style="float: right;">List Post</button></a>
            <br>
            <br>
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-10">
                    <div class="form-group">
                        <strong>Title</strong>
                        <p class="form-control">{{$show->title}}</p>
                    </div>
                    <div class="form-group">
                        <strong>Experience</strong>
                        <p class="form-control">{{$show->experience}}</p>
                    </div>
                    <div class="form-group">
                        <strong>Type</strong>
                        <p class="form-control">{{$show->type}}</p>
                    </div>
                    <div class="form-group">
                        <strong>Skill</strong>
                        <p class="form-control">{{$show->skill}}</p>
                    </div>
                    <div class="form-group">
                        <strong>Required</strong>
                        <textarea name="" id="" cols="125" rows="3">{{$show->required}}</textarea>
                    </div>
                    <div class="form-group">
                        <strong>Salary</strong>
                        <p class="form-control">{{$show->salary}}</p>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
            <br>
            <h1>Danh sách hồ sơ ứng tuyển</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Full name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Favorite</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    $str = "";
                    ?>
                    @foreach($list_recruitmet as $value)
                    <?php 
                    $value->pivot->status == 1 ? $str = "Đã xem" : $str = "Chưa xem";
                    $value->gender == 0 ? $gt = "Nam" : $gt = "Nữ"; 
                    ?>
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$value->fullname}}</td>
                        <td>{{$value->phone_number}}</td>
                        <td>{{$value->address}}</td>
                        <td>{{$gt}}</td>
                        <td>{{$value->favorite}}</td>
                        <td>{{$str}}</td>
                        <td style="display: flex; justify-content: space-evenly">
                            <a href="{{route('detail_recruitment',$value->id)}}">
                            <i class='fas fa-eye'></i>
                            </a>
                            <form action="{{route('RUEmployer.destroy',$value->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button style="border: none;">
                                <i class="fas fa-trash "></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
              {{$list_recruitmet->links()}}
            </div>
        </div>
    </section>
</div>
@endif
@endsection