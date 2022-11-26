@extends('DashboardTemplate.dashboardHeader')
@section('main')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <br>
        <section class="content">
            @if (Session::has('message'))
                <div class="alert alert-success" style="text-align:center;">{{ Session::get('message') }}</div>
            @endif
            <div class="card">
                <h3 class="card-title" style="padding: 30px;">Customer</h3>
                <div class="card-header">

                    <a href="{{ route('AdminCustomers.create') }}"
                        style="text-align: center; margin: 10px; padding: 5px 20px; background: #007bff; width: 12%; color: #fff; border-radius: 5px;">Add
                        new</a>
                    <a style="text-align: center; margin: 10px; padding: 5px 20px; width: 12%; border-radius: 5px;"
                        href="#" class="btn btn-default">Thùng Rác</a>
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
                        @foreach ($customer as $custo)
                            <tbody>

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
                                    <form method="POST" action="{{ route('AdminJobposting.destroy', $custo->id) }}">

                                        <a class="btn btn-info btn-sm modify-icon"
                                            href="{{ route('AdminJobposting.edit', $custo->id) }}">
                                            <i class="fas fa-pencil-alt ">
                                            </i>
                                            Edit
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm modify-icon">
                                            <i class="fas fa-trash ">
                                            </i>
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tbody>
                        @endforeach
                    </table>

                </div>

                <!-- /.card-body -->

            </div>
            <!-- /.card -->
            <div>
                {{ $customer->links() }}
            </div>
        </section>
    </div>
@endsection
