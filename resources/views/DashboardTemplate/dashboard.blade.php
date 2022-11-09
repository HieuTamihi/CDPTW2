@extends('DashboardTemplate.dashboardHeader')
@section('main')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Fixed Layout</h1>
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

        <!-- Main content -->
        <section class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Default box -->
                        <div class="card">

                            <div class="card-body">
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                Footer
                            </div>
                            <!-- /.card-footer-->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">Name</label>
                                    <input type="text" id="inputName" class="form-control" value="" name="name"
                                        required>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
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

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Write some thing</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0" style="overflow-x: auto;">
                    <table class="table table-striped projects modify-table">
                        <thead>
                            <tr>
                                <th style="width: 1%">ID</th>
                                <th style="width: 5%">Name</th>
                                <th style="width: 20%">Name</th>
                                <th style="width: 10%">Name</th>
                                <th style="width: 5%">Name</th>
                                <th style="width: 20%">Name</th>
                                <th style="width: 20%">Name</th>
                                <th style="width: 14%">Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</td>
                            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</td>
                            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</td>
                            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</td>
                            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</td>
                            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</td>
                            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</td>
                            <td class="project-actions text-left">
                                <form method="POST" action="#">
                                    <a class="btn btn-info btn-sm modify-icon" href="#">
                                        <i class="fas fa-pencil-alt ">
                                        </i>
                                        Edit
                                    </a>
                                    <button type="submit" class="btn btn-danger btn-sm modify-icon">
                                        <i class="fas fa-trash ">
                                        </i>
                                        Delete
                                    </button>
                                </form>
                            </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
    </div>
@endsection
