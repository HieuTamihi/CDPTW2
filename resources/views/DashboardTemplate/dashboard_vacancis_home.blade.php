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
                    <h3 class="card-title">Vacancis home</h3>
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
                            <th scope="col">Logo</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Request</th>
                            <th scope="col">Status</th>
                            <th scope="col">Sent date</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($all_vacancis as $row)
                                <th scope="row">{{ $row->id }}</th>
                                <td style="width: 10%;">
                                    <div class="img">
                                        <img style="width: 100%;" src="{{ url('img') }}/{{ $row->image }}"
                                            alt="">
                                    </div>
                                </td>
                                <td>{{ $row->name_company }}</td>
                                <td>{{ $row->address }}</td>
                                <td>{{ $row->required }}</td>
                                <td>{{ $row->status }}</td>
                                <td>{{ date('d-m-Y', strtotime($row->created_at)) }}</td>
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
                {{ $all_vacancis->links() }}
            </div>
        </section>
    </div>
@endsection
