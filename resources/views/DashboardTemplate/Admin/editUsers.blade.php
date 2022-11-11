@extends('DashboardTemplate.dashboardHeader')
@section('main')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>ADD User</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <form action="{{ route('AdminUser.update', $user->id) }}" method="post" enctype="multipart/form-data">
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
                                        <label for="inputName">employer_id</label>
                                        <input type="text" id="inputName" class="form-control"
                                            value="{{ $user->employer_id }}" name="employer_id">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">customer_id</label>
                                        <input type="text" id="inputName" class="form-control"
                                            value="{{ $user->customer_id }}" name="customer_id">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">email</label>
                                        <input type="email" id="inputName" class="form-control"
                                            value="{{ $user->email }}" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">email_verified_at</label>
                                        <input type="text" id="inputName" class="form-control"
                                            value="{{ $user->email_verified_at }}" name="email_verified_at">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">phone</label>
                                        <input type="text" id="inputName" class="form-control"
                                            value="{{ $user->phone }}" name="phone">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">password</label>
                                        <input type="text" id="inputName" class="form-control"
                                            value="{{ $user->password }}" name="password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">role</label>
                                        <input type="text" id="inputName" class="form-control"
                                            value="{{ $user->role }}" name="role">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">status</label>
                                        <input type="text" id="inputName" class="form-control"
                                            value="{{ $user->status }}" name="status">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">remember_token</label>
                                        <input type="text" id="inputName" class="form-control"
                                            value="{{ $user->remember_token }}" name="remember_token">
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
            </form>
        </section>
        <br>
        <section class="content">
    </div>
    </section>
    </div>
@endsection
