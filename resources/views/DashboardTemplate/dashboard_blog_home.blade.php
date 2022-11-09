@extends('DashboardTemplate.dashboardHeader')
@section('main')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    {{-- <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Posts</h1>
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
                <h3 class="card-title">Posts home</h3>
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
                            <th style="width:18%">Title</th>
                            <th style="width:70%">Contents</th>
                            <th style="width:5%">Image</th>
                            <th style="width:2%">Views</th>
                            <th style="width:4%">Created_at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($resultPosts as $result)
                        <td>{{ $result->id }}</td>
                        <td>{{ $result->title }}</td>
                        <td>{{ $result->content }}</td>
                        <td>{{ $result->image }}</td>
                        <td>{{ $result->views }}</td>
                        <td> {{ date('d-m-Y', strtotime($result->created_at)) }}</td>
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
                        @endforeach
                    </tbody>
                </table>

            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <div>
            {{ $resultPosts->links() }}
        </div>
    </section>
</div>
@endsection