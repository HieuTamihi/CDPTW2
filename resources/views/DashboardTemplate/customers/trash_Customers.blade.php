@extends('DashboardTemplate.dashboardHeader')
@section('main')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <br>
        @if (Session::has('message'))
            <div class="alert alert-success" style="text-align:center;">{{ Session::get('message') }}</div>
        @endif
        <section class="content">
            <div class="card">
                <h3 style="margin: 10px" class="card-title">Customers</h3>
                <div class="card-header">
                    <a href="{{ route('AdminCustomers.create') }}"
                        style="text-align: center; margin: 10px; padding: 5px 20px; background: #007bff; width: 12%; color: #fff; border-radius: 5px;">Add
                        new</a>
                    <a style="text-align: center; margin: 10px; padding: 5px 20px; width: 12%; border-radius: 5px;"
                        href="{{ route('AdminCustomers.index') }}" class="btn btn-default">All Customers</a>
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
                                <th style="width:1%">ID</th>
                                <th style="width:1%">email</th>
                                <th style="width:5%">phone_number </th>
                                <th style="width:5%">fullname</th>
                                <th style="width:10%">status</th>
                                <th style="width:15%">date</th>
                                <th style="width:70%">address</th>
                                <th style="width:5%">gender</th>
                                <th style="width:4%">favorite</th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach ($customer as $custo)
                                <td>{{ $custo->id }}</td>
                                <td>{{ $custo->email }}</td>
                                <td>{{ $custo->phone_number }}</td>
                                <td>{{ $custo->fullname }}</td>
                                <td>{{ $custo->status }}</td>
                                <td>{{ $custo->date }}</td>
                                <td>{{ $custo->address }}</td>
                                <td>{{ $custo->gender }}</td>
                                <td>{{ $custo->favorite }}</td>
                                <td class="project-actions text-left">
                                    <a class="btn btn-info btn-sm modify-icon"
                                        href="{{ route('Customers_Trash.show', $custo->id) }}">
                                        Khôi phục
                                    </a>
                                    <a class="btn btn-info btn-sm modify-icon"
                                        href="{{ route('Customers_Trash.edit', $custo->id) }}">
                                        <i class="fas fa-trash ">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </section>
    </div>
@endsection
