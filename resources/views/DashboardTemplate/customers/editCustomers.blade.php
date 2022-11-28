@extends('DashboardTemplate.dashboardHeader')
@section('main')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Customer</h1>
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
            <form action="{{ route('AdminCustomers.update', $customer->id) }}" method="post" enctype="multipart/form-data">
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
                                        <label for="inputName">Email</label>
                                        <input type="text" id="inputName" class="form-control"
                                            value="{{ $customer->email }}" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">Phone Number</label>
                                        <input type="text" id="inputName" class="form-control"
                                            value="{{ $customer->phone_number }}" name="phone_number">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">Fullname</label>
                                        <input type="text" id="inputName" class="form-control"
                                            value="{{ $customer->fullname }}" name="fullname">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">date</label>
                                        <input type="date" id="inputName" class="form-control"
                                            value="{{ $customer->date }}" name="date">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">Address</label>
                                        <input type="text" id="inputName" class="form-control"
                                            value="{{ $customer->address }}" name="address">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">Gender</label>
                                        <input type="text" id="inputName" class="form-control"
                                            value="{{ $customer->gender }}" name="gender">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">Favorite</label>
                                        <input type="text" id="inputName" class="form-control"
                                            value="{{ $customer->favorite }}" name="favorite">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">Status</label>
                                        <input type="text" id="inputName" class="form-control"
                                            value="{{ $customer->status }}" name="status">
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
