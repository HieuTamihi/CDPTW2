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
                <h3 style="margin: 10px" class="card-title">Job Posting</h3>
                <div class="card-header">
                    <a href="{{ route('AdminJobposting.create') }}"
                        style="text-align: center; margin: 10px; padding: 5px 20px; background: #007bff; width: 12%; color: #fff; border-radius: 5px;">Add
                        new</a>
                    <a style="text-align: center; margin: 10px; padding: 5px 20px; width: 12%; border-radius: 5px;"
                        href="{{ route('AdminJobposting.index') }}" class="btn btn-default">All Job Posting</a>
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
                                <th style="width:1%">employer_id</th>
                                <th style="width:5%">title</th>
                                <th style="width:5%">experience</th>
                                <th style="width:2%">type</th>
                                <th style="width:4%">skill</th>
                                <th style="width:70%">required</th>
                                <th style="width:4%">salary</th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach ($jobposting as $job)
                                <td><?php $i = 1;
                                echo $i++; ?></td>
                                <td>{{ $job->employer_id }}</td>
                                <td>{{ $job->title }}</td>
                                <td>{{ $job->experience }}</td>
                                <td>{{ $job->type }}</td>
                                <td>{{ $job->skill }}</td>
                                <td>{{ $job->required }}</td>
                                <td>{{ $job->salary }}</td>
                                <td class="project-actions text-left">
                                    <a class="btn btn-info btn-sm modify-icon"
                                        href="{{ route('Jobposting_Trash.show', $job->id) }}">
                                        Khôi phục
                                    </a>
                                    <a class="btn btn-info btn-sm modify-icon"
                                        href="{{ route('Jobposting_Trash.edit', $job->id) }}">
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
