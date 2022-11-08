@extends('DashboardTemplate.dashboardHeader')
@section('main')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Employer</h1>
                        <?php
                        $message = Session::get('message');
                        if ($message) {
                            echo '<span class="text-alert">' . $message . '</span>';
                            Session::put('message', null);
                        }
                        ?>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Layout</a></li>
                            <li class="breadcrumb-item active">Fixed Layout</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <form action="{{ route('employer-home.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="mb-3">
                                        <label for="inputName">User id</label>
                                        <input type="text" id="inputName" class="form-control" value=""
                                            name="user_id" placeholder="User id">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">Name Company</label>
                                        <input type="text" id="inputName" class="form-control" value=""
                                            name="name_company" placeholder="Tên công ty">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">Address</label>
                                        <input type="text" id="inputName" class="form-control" value=""
                                            name="address" placeholder="Địa chỉ công ty">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Image</label>
                                        <input class="form-control" type="file" id="formFile" value=""
                                            name="image">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">Email</label>
                                        <input type="email" id="inputName" class="form-control" value=""
                                            name="email" placeholder="Email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">Phone number</label>
                                        <input type="text" id="inputName" class="form-control" value=""
                                            name="phone_number" placeholder="số điện thoại">
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
