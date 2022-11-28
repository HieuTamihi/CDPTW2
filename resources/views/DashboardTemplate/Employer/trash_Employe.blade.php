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
                <h3 style="margin: 10px" class="card-title">Employer</h3>
                <div class="card-header">
                    <a href="{{ route('AdminEmloyer.create') }}"
                        style="text-align: center; margin: 10px; padding: 5px 20px; background: #007bff; width: 12%; color: #fff; border-radius: 5px;">Add
                        new</a>
                    <a style="text-align: center; margin: 10px; padding: 5px 20px; width: 12%; border-radius: 5px;"
                        href="{{ route('AdminEmloyer.index') }}" class="btn btn-default">All Employer</a>
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
                                <th style="width:1%">user_id</th>
                                <th style="width:20%">Logo</th>
                                <th style="width:5%">Name</th>
                                <th style="width:2%">address</th>
                                <th style="width:70%">infor</th>
                                <th style="width:20%">responsibility</th>
                                <th style="width:4%">welfare</th>
                                <th style="width:5%">email</th>
                                <th style="width:4%">website</th>
                                <th style="width:5%">phone_number</th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach ($employer as $emplo)
                                <td>{{ $emplo->id }}</td>
                                <td>{{ $emplo->user_id }}</td>
                                <td>
                                    <div class="img" style="width: 100px;">
                                        <img style="width: 100%;" src="{{ url('img') }}/{{ $emplo->image }}"
                                            alt="">
                                    </div>
                                </td>
                                <td>{{ $emplo->name_company }}</td>
                                <td> <?php echo substr($emplo->address, 0, 20) . '...'; ?> </td>
                                <td> <?php echo substr($emplo->infor, 0, 30) . '...'; ?> </td>
                                <td> <?php echo substr($emplo->responsibility, 0, 30) . '...'; ?> </td>
                                <td> <?php echo substr($emplo->welfare, 0, 30) . '...'; ?></td>
                                <td>{{ $emplo->email }}</td>
                                <td>{{ $emplo->website }}</td>
                                <td>{{ $emplo->phone_number }}</td>
                                <td class="project-actions text-left">
                                    <a class="btn btn-info btn-sm modify-icon"
                                        href="{{ route('Employer_Trash.show', $emplo->id) }}">
                                        Khôi phục
                                    </a>
                                    <a class="btn btn-info btn-sm modify-icon"
                                        href="{{ route('Employer_Trash.edit', $emplo->id) }}">
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
