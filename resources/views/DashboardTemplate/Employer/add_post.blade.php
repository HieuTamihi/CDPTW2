@extends('DashboardTemplate.dashboardHeader')
@section('main')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <form action="{{route('CRUDEmployer.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <strong>Title</strong>
                            <input type="text" name="title" class="form-control" placeholder="Nhập tiêu đề bài post" >
                        </div>
                        <div class="form-group">
                            <strong>Experience</strong>
                            <input type="text" name="experience" class="form-control" placeholder="Nhập số năm kinh nghiệm" >
                        </div>
                        <div class="form-group">
                            <strong>Type</strong>
                            <input type="text" name="type" class="form-control" placeholder="Nhập thời gian làm việc">
                        </div>
                        <div class="form-group">
                            <strong>Skill</strong>
                            <input type="text" name="skill" class="form-control" placeholder="Nhập kỹ năng yêu cầu" >
                        </div>
                        <div class="form-group">
                            <strong>Required</strong>
                            <textarea name="required" id="" cols="125" rows="3" placeholder="Nhập yêu cầu cần thiết">
                            
                            </textarea>
                        </div>
                        <div class="form-group">
                            <strong>Salary</strong>
                            <input type="text" name="salary" class="form-control" placeholder="Nhập mức lương" >
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                 <button class="btn btn-primary" style="float: right;">Add New Post</button>
            </form>
        </div>
    </section>
</div>
@endsection