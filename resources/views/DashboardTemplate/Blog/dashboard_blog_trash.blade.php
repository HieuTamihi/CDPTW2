@extends('DashboardTemplate.dashboardHeader')
@section('main')
    <div class="content-wrapper">
        <br>
        <section class="content">
            @if (session('msg'))
                <div class="alert alert-success">{{ session('msg') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('admin-blog-home.index') }}">
                        <h3 class="card-title btn btn-primary"> <i class="fas fa-arrow-left"></i> Back</h3>
                    </a>
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
                                <th style="width:20%">Title</th>
                                <th style="width:56%">Contents</th>
                                <th style="width:5%">Image</th>
                                <th style="width:6%">Views</th>
                                <th style="width:10%">Post date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($resultPosts as $result)
                                <td>{{ $result->id }}</td>
                                <td>{{ $result->title }}</td>
                                <td>{{ substr($result->content, 0, 455) }}</td>
                                {{-- <td>{{ $result->content }}</td> --}}
                                <td><img src="{{ asset('img/blogit/' . $result->image) }}" width="70px" height="70px"
                                        alt="image" style="object-fit: cover"></td>
                                <td>{{ $result->views }}</td>
                                <td> {{ date('d-m-Y', strtotime($result->created_at)) }}</td>
                                <td class="project-actions text-left">
                                    <a class="btn btn-warning btn-sm modify-icon"
                                        href="{{ route('blogRestore', $result->id) }}">
                                        <i class='fas fa-trash-restore-alt' style='font-size:20px'></i>
                                        Restore
                                    </a>
                                    <form method="POST" action="{{ route('admin-blog-home.destroy', $result->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Do you want to make sure to delete this post?')"
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
            <div>
                {{ $resultPosts->links() }}
            </div>
        </section>
    </div>
@endsection
