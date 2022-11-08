@extends('DashboardTemplate.dashboardHeader')
@section('main')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        {{-- <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Vacancis</h1>
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
        </section> --}}
        <br>
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Employer home</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <table class="table table-striped align-middle">
                    <thead>
                        <tr>
                            <th scope=" col">ID</th>
                            <th scope="col">employer_id</th>
                            <th scope="col">title</th>
                            <th scope="col">experience</th>
                            <th scope="col">type</th>
                            <th scope="col">skill</th>
                            <th scope="col">required</th>
                            <th scope="col">salary</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($all_jobposting as $row)
                            <tr>
                                <th scope="row">{{ $row->id }}</th>
                                <th scope="row">{{ $row->employer_id }}</th>
                                <td>{{ $row->title }}</td>
                                <td>{{ $row->experience }}</td>
                                <td>{{ $row->type }}</td>
                                <td>{{ $row->skill }}</td>
                                <td>{{ $row->required }}</td>
                                <td>{{ $row->salary }}</td>
                                <td>
                                    <a href=""><i class="fa-solid fa-pen"></i></a>
                                    <a href=""><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div>
                {{ $all_jobposting->links() }}
            </div>
        </section>
    </div>
@endsection
