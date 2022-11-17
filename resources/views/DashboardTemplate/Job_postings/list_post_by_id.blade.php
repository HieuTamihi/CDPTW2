@extends('DashboardTemplate.dashboardHeader')
@section('main')
@if(Auth::check() && Auth::user()->role == 2)
die();
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <a href="{{route('CRUDJobByEmployer.create')}}"><button class="btn btn-primary" style="float: right;">Add New Post</button></a>
            <br> <br>
            @if(Session::has('notify'))
            <div class="alert alert-success" style="text-align:center;">{{Session::get('notify')}}</div>
            @endif
            <table class="table table-striped">
                <thead>
                    <tr style="text-align: center;">
                        <th scope="col" style="width:1%;">#</th>
                        <th scope="col" style="width:22%;">Title</th>
                        <th scope="col" style="width:10%;">Experience</th>
                        <th scope="col" style="width:7%;">Type</th>
                        <th scope="col" style="width:10%;">Skill</th>
                        <th scope="col" style="width:30%;">Required</th>
                        <th scope="col" style="width:8%;">Salary</th>
                        <th scope="col" style="width:12%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    ?>
                    @foreach($result as $value)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{substr($value->title,0,40)}}</td>
                        <td>{{substr($value->experience,0,40)}}</td>
                        <td>{{$value->type}}</td>
                        <td>{{substr($value->skill,0,25)}}</td>
                        <td>{{substr($value->required,0,100)}}</td>
                        <td>{{$value->salary}}</td>
                        <td style="display: flex; justify-content: space-evenly;">
                            <a href="{{route('CRUDJobByEmployer.show',$value->id)}}">
                            <i class='fas fa-eye'></i>
                        </a>
                            <a href="{{route('CRUDJobByEmployer.edit',$value->id)}}">
                            <i class="fas fa-pencil-alt "></i>
                            </a>
                            <form action="{{route('CRUDJobByEmployer.destroy',$value)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" style="border: none; background: none;">
                                <i class="fas fa-trash "></i>
                                </button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </section>
</div>
@endif
@endsection