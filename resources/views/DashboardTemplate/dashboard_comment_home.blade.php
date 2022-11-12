@extends('DashboardTemplate.dashboardHeader')
@section('main')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <br>
        <section class="content">
            @if (session('msg'))
                <div class="alert alert-success">{{ session('msg') }}</div>
            @endif
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Comment</h3>

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
                                <th style="width:5%">ID</th>
                                <th style="width:5%">Status</th>
                                <th style="width:30%">Comment</th>
                                <th style="width:5%">Post id</th>
                                <th style="width:30%">Post</th>
                                <th style="width:15%">Customer</th>
                                <th style="width:10%">Comment date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($resultComment as $result)
                                <td>{{ $result->id }}</td>
                                <td>
                                    @if ($result->status == '1')
                                        <a class="btn btn-success"
                                            href="{{ route('commentStatus', ['id' => $result->id, 'status' => 0]) }}">Actived</a>
                                    @else
                                        <a class="btn btn-danger"
                                            href="{{ route('commentStatus', ['id' => $result->id, 'status' => 1]) }}">Locked</a>
                                    @endif
                                </td>

                                <td>{{ $result->comment }}</td>
                                <td>{{ $result['posts']->id }}</td>
                                <td>{{ $result['posts']->title }}</td>
                                <td>{{ $result['customers']->email }}</td>
                                <td> {{ date('d-m-Y H:i', strtotime($result->created_at)) }}</td>
                                <td class="project-actions text-left">
                                    <a target="_blank_" class="btn btn-success btn-sm modify-icon"
                                        href="{{ route('blogDetail', $result['posts']->id) }}">
                                        <i class="fas fa-eye ">
                                        </i>
                                        View
                                    </a>
                                    {{-- <a class="btn btn-info btn-sm modify-icon" href="#">
                                        <i class="fas fa-pencil-alt ">
                                        </i>
                                        Lock
                                    </a> --}}
                                    <form method="POST" action="{{ route('admin-blog-comment.destroy', $result->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Do you want to make sure to delete this comment?')"
                                            type="submit" class="btn btn-danger btn-sm modify-icon">
                                            <i class="fas fa-trash ">
                                            </i>
                                            Delete
                                        </button>
                                    </form>
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
