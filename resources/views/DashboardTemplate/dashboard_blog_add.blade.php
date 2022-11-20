@extends('DashboardTemplate.dashboardHeader')
@section('main')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
<<<<<<< HEAD
                        <<<<<<< HEAD <h1>Add posts</h1>
                            @if (session('msg'))
                                <div class="alert alert-success" style="width: 250px">{{ session('msg') }}</div>
                            @endif
                    </div>
                    <div class="col-sm-6">
                        =======
                        <h1>Posts</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Layout</a></li>
                            <li class="breadcrumb-item active">Fixed Layout</li>
                        </ol>
<<<<<<< HEAD
>>>>>>> blog_home
=======
                        >>>>>>> blog_home
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
<<<<<<< HEAD
<<<<<<< HEAD
            <<<<<<< HEAD <form action="{{ route('admin-blog-home.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                =======
                <form action="{{ route('blog-add.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if ($errors->any())
                    @endif
                    >>>>>>> blog_home
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="inputName">Title</label>
                                            <<<<<<< HEAD <input type="text" id="inputName" class="form-control"
                                                value="{{ old('post_title') }}" name="post_title" placeholder="Tiêu đề">
                                                @error('post_title')
                                                    <span style="color: red;">{{ $message }}</span>
                                                @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Image</label>
                                            <input class="form-control" type="file" id="formFile"
                                                value="{{ old('post_image') }}" accept="image/jpg, image/jpeg, image/png"
                                                name="post_image">
                                            @error('post_image')
                                                <span style="color: red;">{{ $message }}</span>
                                            @enderror
                                            =======
                                            <input type="text" id="inputName" class="form-control" value=""
                                                name="post_title" placeholder="Tiêu đề">
                                        </div>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Image</label>
                                            <input class="form-control" type="file" id="formFile" value=""
                                                name="post_image">
                                            >>>>>>> blog_home
                                        </div>
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="inputName">Content</label>
                                                <<<<<<< HEAD <textarea id="ckeditorPost" class="form-control" value="" name="post_content" rows="4" cols="50"
                                                    placeholder="Nội dung">{{ old('post_content') }}</textarea>
                                                @error('post_content')
                                                    <span style="color: red;">{{ $message }}</span>
                                                @enderror
                                                =======
                                                <textarea id="inputName" class="form-control" value="" name="post_content" rows="4" cols="50"
                                                    placeholder="Nội dung"></textarea>
                                                >>>>>>> blog_home
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <a href="" class="btn btn-secondary">Cancel</a>
                                <button type="submit" class="btn btn-success float-right">Add</button>
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
