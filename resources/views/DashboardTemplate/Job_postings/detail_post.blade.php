@extends('DashboardTemplate.dashboardHeader')
@section('main')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
        @if(Session::has('notify'))
            <div class="alert alert-success" style="text-align:center;">{{Session::get('notify')}}</div>
            @endif
<<<<<<< HEAD
<<<<<<< HEAD
            <a href=""><button class="btn btn-primary" style="float: right;">List Post</button></a>
=======
            <a href="{{route('CRUDJobByEmployer.index')}}"><button class="btn btn-primary" style="float: right;">List Post</button></a>
>>>>>>> origin/detail_page
=======
            <a href=""><button class="btn btn-primary" style="float: right;">List Post</button></a>
>>>>>>> origin/recruitment_customer
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
<<<<<<< HEAD
<<<<<<< HEAD
                    ?>
                    @foreach($show->customers as $value)
=======
                    $str = "";
                    ?>
                    @foreach($list_recruitmet as $value)
                    <?php 
                    $value->pivot->status == 1 ? $str = "Đã xem" : $str = "Chưa xem";
                    $value->gender == 0 ? $gt = "Nam" : $gt = "Nữ"; 
                    ?>
>>>>>>> origin/detail_page
=======
                    ?>
                    @foreach($show->customers as $value)
>>>>>>> origin/recruitment_customer
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$value->fullname}}</td>
                        <td>{{$value->phone_number}}</td>
                        <td>{{$value->address}}</td>
<<<<<<< HEAD
<<<<<<< HEAD
                        <td>{{$value->gender}}</td>
                        <td>{{$value->favorite}}</td>
                        <td>{{$value->pivot->status}}</td>
=======
                        <td>{{$gt}}</td>
                        <td>{{$value->favorite}}</td>
                        <td>{{$str}}</td>
>>>>>>> origin/detail_page
=======
                        <td>{{$value->gender}}</td>
                        <td>{{$value->favorite}}</td>
                        <td>{{$value->status}}</td>
>>>>>>> origin/recruitment_customer
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
            <div>
              {{$list_recruitmet->links()}}
            </div>
>>>>>>> origin/detail_page
=======
>>>>>>> origin/recruitment_customer
        </div>
    </section>
</div>
@endsection