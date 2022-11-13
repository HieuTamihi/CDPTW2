@extends('DashboardTemplate.dashboardHeader')
@section('main')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            @if (session('msg'))
                <div class="alert alert-success">{{ session('msg') }}</div>
            @endif
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit posts</h1>
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <form action="{{ route('admin-blog-home.update', $showDataEdit->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="mb-3">
                                        <label for="inputName">Title</label>
                                        <input type="text" id="inputName" class="form-control"
                                            value="{{ $showDataEdit->title }}" name="post_title" placeholder="Tiêu đề">
                                        @error('post_title')
                                            <span style="color: red;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Image</label>
                                        <img style="width:100px;height:100px;object-fit: cover;"
                                            src="{{ asset('img/blogit/' . $showDataEdit->image) }}"
                                            accept="image/png, image/jpeg">
                                        <input class="form-control" type="file" id="formFile"
                                            accept="image/jpg, image/jpeg, image/png" name="post_image">


                                        @error('post_image')
                                            <span style="color: red;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="inputName">Content</label>
                                            <textarea id="ckeditorPost" class="form-control" value="" name="post_content" rows="4" cols="50"
                                                placeholder="Nội dung">{!! $showDataEdit->content !!}</textarea>
                                            @error('post_content')
                                                <span style="color: red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-success float-right">Update</button>
                        </div>
                    </div>
            </form>
        </section>
        <br>
        <section class="content">
    </div>
    </section>
    </div>
@endsection
