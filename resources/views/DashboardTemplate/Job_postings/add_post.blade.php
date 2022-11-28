@extends('DashboardTemplate.dashboardHeader')
@section('main')
    @if (Auth::check() && Auth::user()->role == 2)
        die();
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <form action="{{ route('CRUDJobByEmployer.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <strong>Title</strong>
                                    <input type="text" name="title" class="form-control"
                                        placeholder="Nhập tiêu đề bài post" value="{{ old('title') }}">
                                    @if ($errors->has('title'))
                                        <strong class="text-danger">{{ $errors->first('title') }}</strong>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <strong>Experience</strong>
                                    <input type="text" name="experience" class="form-control"
                                        placeholder="Nhập số năm kinh nghiệm" value="{{ old('experience') }}">
                                    @if ($errors->has('experience'))
                                        <strong class="text-danger">{{ $errors->first('experience') }}</strong>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <strong>Type</strong>
                                    <input type="text" name="type" class="form-control"
                                        placeholder="Nhập thời gian làm việc" value="{{ old('type') }}">
                                    @if ($errors->has('type'))
                                        <strong class="text-danger">{{ $errors->first('type') }}</strong>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <strong>Skill</strong>
                                    <input type="text" name="skill" class="form-control"
                                        placeholder="Nhập kỹ năng yêu cầu" value="{{ old('skill') }}">
                                    @if ($errors->has('skill'))
                                        <strong class="text-danger">{{ $errors->first('skill') }}</strong>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <strong>Required</strong> <br>
                                    <textarea name="required" id="" cols="140" rows="3" placeholder="Nhập yêu cầu cần thiết">{{ old('required') }}</textarea>
                                    @if ($errors->has('required'))
                                        <strong class="text-danger">{{ $errors->first('required') }}</strong>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <strong>Salary</strong>
                                    <input type="text" name="salary" class="form-control" placeholder="Nhập mức lương"
                                        value="{{ old('salary') }}">
                                    @if ($errors->has('salary'))
                                        <strong class="text-danger">{{ $errors->first('salary') }}</strong>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <button class="btn btn-primary" style="float: right;">Add New Post</button>
                    </form>
                </div>
            </section>
        </div>
    @endif
@endsection
