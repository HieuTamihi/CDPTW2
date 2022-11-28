@extends('DashboardTemplate.dashboardHeader')
@section('main')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>ADD Customers</h1>
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
            <form action="{{ route('AdminCustomers.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="mb-3">
                                        <label for="inputName">Email</label>
                                        <input type="email" id="inputName" class="form-control" value=""
                                            name="email" placeholder="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">Phone Number </label>
                                        <input type="text" id="inputName" class="form-control" value=""
                                            name="phone_number" placeholder="phone_number">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">Fullname</label>
                                        <input type="text" id="inputName" class="form-control" value=""
                                            name="fullname" placeholder="fullname">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">Date</label>
                                        <input type="date" id="inputName" class="form-control" value=""
                                            name="date" placeholder="date">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">Address</label>
                                        <input type="text" id="inputName" class="form-control" value=""
                                            name="address" placeholder="address">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">Gender</label>
                                        <input type="text" id="inputName" class="form-control" value=""
                                            name="gender" placeholder="gender">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">Favorite</label>
                                        <input type="text" id="inputName" class="form-control" value=""
                                            name="favorite" placeholder="favorite">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">Status</label>
                                        <input type="text" id="inputName" class="form-control" value=""
                                            name="status" placeholder="status">
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
