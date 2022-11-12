@extends('DashboardTemplate.dashboardHeader')
@section('main')
    <div class="content-wrapper">
<<<<<<< HEAD:resources/views/DashboardTemplate/Admin/index.blade.php
        <!-- Content Header (Page header) -->
=======
>>>>>>> CRUD_post:resources/views/DashboardTemplate/dashboard_blog_home.blade.php
        <br>
        <section class="content">

            <div class="card">
                <a href="{{ route('AdminUser.create') }}"
                    style="text-align: center; margin: 10px; padding: 5px 20px; background: #007bff; width: 12%; color: #fff; border-radius: 5px;">Add
                    new</a>
                <div class="card-header">
<<<<<<< HEAD:resources/views/DashboardTemplate/Admin/index.blade.php
                    <h3 class="card-title">User</h3>
=======
                    <a href="{{ route('admin-blog-home.create') }}">
                        <h3 class="card-title">Add now <i class="fas fa-plus"></i></h3>
                        @if (session('msg'))
                            <div class="alert alert-success" style="width: 300px">{{ session('msg') }}</div>
                        @endif
                    </a>
>>>>>>> CRUD_post:resources/views/DashboardTemplate/dashboard_blog_home.blade.php
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
                                <th style="width:18%">employer_id</th>
                                <th style="width:70%">customer_id</th>
                                <th style="width:5%">email</th>
                                <th style="width:2%">email_verified_at</th>
                                <th style="width:4%">phone</th>
                                <th style="width:4%">password</th>
                                <th style="width:4%">role</th>
                                <th style="width:4%">status</th>
                                <th style="width:4%">remember_token</th>
                            </tr>
                        </thead>
                        <tbody>
<<<<<<< HEAD:resources/views/DashboardTemplate/Admin/index.blade.php
                            @foreach ($users as $user)
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->employer_id }}</td>
                                <td>{{ $user->customer_id }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->email_verified_at }}</td>
                                <td>{{ $user->phone }}</td>
                                <td><?php echo substr($user->password, 0, 0) . '.........'; ?></td>
                                <td>{{ $user->role }}</td>
                                <td>{{ $user->status }}</td>
                                <td>{{ $user->remember_token }}</td>
                                <td class="project-actions text-left">
                                    <form method="POST" action="{{ route('AdminUser.destroy', $user->id) }}">

                                        <a class="btn btn-info btn-sm modify-icon"
                                            href="{{ route('AdminUser.edit', $user->id) }}">
                                            <i class="fas fa-pencil-alt ">
                                            </i>
                                            Edit
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm modify-icon">
=======
                            @foreach ($resultPosts as $result)
                                <td>{{ $result->id }}</td>
                                <td>{{ $result->title }}</td>
                                <td>{{ $result->content }}</td>
                                <td><img src="{{ asset('img/blogit/' . $result->image) }}" width="70px" height="70px"
                                        alt="image" style="object-fit: cover"></td>
                                <td>{{ $result->views }}</td>
                                <td> {{ date('d-m-Y', strtotime($result->created_at)) }}</td>
                                <td class="project-actions text-left">
                                    <a target="_blank_" class="btn btn-success btn-sm modify-icon"
                                        href="{{ route('blogDetail', $result->id) }}">
                                        <i class="fas fa-eye ">
                                        </i>
                                        View
                                    </a>
                                    <a class="btn btn-info btn-sm modify-icon"
                                        href="{{ route('admin-blog-home.edit', $result->id) }}">
                                        <i class="fas fa-pencil-alt ">
                                        </i>
                                        Edit
                                    </a>
                                    <form method="POST" action="{{ route('admin-blog-home.destroy', $result->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Do you want to make sure to delete this post?')"
                                            type="submit" class="btn btn-danger btn-sm modify-icon">
>>>>>>> CRUD_post:resources/views/DashboardTemplate/dashboard_blog_home.blade.php
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
