@extends('DashboardTemplate.dashboardHeader')
@section('main')
@if(Auth::check())
@if(Auth::user()->role == 2)
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <a href="{{route('CRUDEmployer.create')}}"><button class="btn btn-primary" style="float: right;">Add New Post</button></a> 
           <br> <br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" style="width:1%;">#</th>
                        <th scope="col" style="width:22%;">Title</th>
                        <th scope="col" style="width:10%;">Experience</th>
                        <th scope="col" style="width:7%;">Type</th>
                        <th scope="col" style="width:10%;">Skill</th>
                        <th scope="col" style="width:30%;">Required</th>
                        <th scope="col" style="width:8%;">Salary</th>
                        <th scope="col"style="width:12%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $i= 1;
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
                        <td>
                          <a href="{{route('CRUDEmployer.show',$value->id)}}">Xem</a>
                          <a href="{{route('CRUDEmployer.edit',$value->id)}}">Sửa</a>
                          <form action="{{route('CRUDEmployer.destroy',$value->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit">Xóa</button>
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
@endif
@endsection