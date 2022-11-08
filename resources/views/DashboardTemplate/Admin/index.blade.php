@extends('DashboardTemplate.dashboardHeader')
@section('main')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <br>
        <section class="content">

            <div class="card">
                <a href="{{ route('AdminUser.create') }}"
                    style="margin: 10px; padding: 5px 20px; background: #007bff; width: 10%; color: #fff; border-radius: 5px;">Add
                    new</a>
                <div class="card-header">
                    <h3 class="card-title">User</h3>
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
                            @foreach ($users as $user)
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->employer_id }}</td>
                                <td>{{ $user->customer_id }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->email_verified_at }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->password }}</td>
                                <td>{{ $user->role }}</td>
                                <td>{{ $user->status }}</td>
                                <td>{{ $user->remember_token }}</td>
                                <td class="project-actions text-left">
                                    <a class="btn btn-info btn-sm modify-icon"
                                        href="{{ route('AdminUser.edit', $user->id) }}">
                                        Edit
                                    </a>
                                    <form action="{{ route('AdminUser.destroy', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            style="color: #fff;
                                            background-color: red;
                                            box-shadow: none;
                                            border: red;
                                            padding: 0.25rem 10px;
                                            font-size: .875rem;
                                            line-height: 1.5;
                                            border-radius: 0.2rem;"
                                            type="submit">Xóa</button>
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