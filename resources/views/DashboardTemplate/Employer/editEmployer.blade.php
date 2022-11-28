@extends('DashboardTemplate.dashboardHeader')
@section('main')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Employer</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <section class="content">
            <form action="{{ route('AdminEmloyer.update', $employer->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @if ($errors->any())
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="mb-3">
                                        <label for="inputName">Website</label>
                                        <input type="text" id="inputName" class="form-control"
                                            value="{{ $employer->website }}" name="website">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">Infor</label>
                                        <textarea type="text" id="ckeditor_edit_infor" class="form-control" name="infor">{{ $employer->infor }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">Responsibility</label>
                                        <textarea type="text" id="ckeditor_edit_responsibility" class="form-control" name="responsibility">{{ $employer->responsibility }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">Welfare</label>
                                        <textarea type="text" id="ckeditor_edit_welfare" class="form-control" name="welfare">{{ $employer->welfare }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">Name Company</label>
                                        <input type="text" id="inputName" class="form-control"
                                            value="{{ $employer->name_company }}" name="name_company">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">Address</label>
                                        <input type="text" id="inputName" class="form-control"
                                            value="{{ $employer->address }}" name="address">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">Email</label>
                                        <input type="email" id="inputName" class="form-control"
                                            value="{{ $employer->email }}" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">Phone number</label>
                                        <input type="text" id="inputName" class="form-control"
                                            value="{{ $employer->phone_number }}" name="phone_number">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Image</label>
                                        <input class="form-control" type="file" id="formFile" name="image">
                                        <div class="img">
                                            <img src="{{ url('img') }}/{{ $employer->image }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <a href="" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-success float-right">Seve</button>
                        </div>
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
