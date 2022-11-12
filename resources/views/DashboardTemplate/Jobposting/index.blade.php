@extends('DashboardTemplate.dashboardHeader')
@section('main')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <br>
        <section class="content">

            <div class="card">
                <a href="{{ route('AdminJobposting.create') }}"
                    style="text-align: center; margin: 10px; padding: 5px 20px; background: #007bff; width: 12%; color: #fff; border-radius: 5px;">Add
                    new</a>
                <div class="card-header">
                    <h3 class="card-title">Job Posting</h3>
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
                        @foreach ($jobposting as $job)
                            <tbody>

                                <td>{{ $job->id }}</td>
                                <td>{{ $job->employer_id }}</td>
                                <td>{{ $job->title }}</td>
                                <td>{{ $job->experience }}</td>
                                <td>{{ $job->type }}</td>
                                <td>{{ $job->skill }}</td>
                                <td>{{ $job->required }}</td>
                                <td>{{ $job->salary }}</td>
                                <td class="project-actions text-left">
                                    <form method="POST" action="{{ route('AdminJobposting.destroy', $job->id) }}">

                                        <a class="btn btn-info btn-sm modify-icon"
                                            href="{{ route('AdminJobposting.edit', $job->id) }}">
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
                {{ $jobposting->links() }}
            </div>
        </section>
    </div>
@endsection
