@extends('DashboardTemplate.dashboardHeader')
@section('main')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <a href="{{route('CRUDEmployer.index')}}"><button class="btn btn-primary" style="float: right;">List Post</button></a>
            <br>
            <br>
            <form action="{{route('CRUDEmployer.update',$show->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-1"></div>

                    <div class="col-md-10">
                        <div class="form-group">
                            <strong>Title</strong>
                            <input type="text" name="title" class="form-control" placeholder="Nhập tiêu đề cần sửa" value="{{$show->title}}">
                        </div>
                        <div class="form-group">
                            <strong>Experience</strong>
                            <input type="text" name="experience" class="form-control" placeholder="Nhập số năm kinh nghiệm" value="{{$show->experience}}">
                        </div>
                        <div class="form-group">
                            <strong>Type</strong>
                            <input type="text" name="type" class="form-control" placeholder="Nhập thời gian làm việc" value="{{$show->type}}">
                        </div>
                        <div class="form-group">
                            <strong>Skill</strong>
                            <input type="text" name="skill" class="form-control" placeholder="Nhập kỹ năng yêu cầu" value="{{$show->skill}}">
                        </div>
                        <div class="form-group">
                            <strong>Required</strong>
                            <textarea name="required" id="" cols="123" rows="3">
                            {{$show->required}}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <strong>Salary</strong>
                            <input type="text" name="salary" class="form-control" placeholder="Nhập mức lương" value="{{$show->salary}}">
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <button class="btn btn-primary" style="float: right;">Edit</button>
            </form>
        </div>
    </section>
</div>
@endsection