@extends('DashboardTemplate.dashboardHeader')
@section('main')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Job Posting</h1>
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
        </section>
        <section class="content">
            <form action="{{ route('AdminJobposting.update', $jobposting->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="mb-3">
                                        <label for="inputName">Employer Id</label>
                                        <input type="text" id="inputName" class="form-control" value=""
                                            name="employer_id" placeholder="employer_id">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">Title</label>
                                        <input type="text" id="inputName" class="form-control" value=""
                                            name="title" placeholder="title">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">Experience</label>
                                        <input type="text" id="inputName" class="form-control" value=""
                                            name="experience" placeholder="experience">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">Type</label>
                                        <input type="text" id="inputName" class="form-control" value=""
                                            name="type" placeholder="type">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">Skill</label>
                                        <input type="text" id="inputName" class="form-control" value=""
                                            name="skill" placeholder="skill">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">Required</label>
                                        <input type="text" id="inputName" class="form-control" value=""
                                            name="required" placeholder="required">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName">Salary</label>
                                        <input type="text" id="inputName" class="form-control" value=""
                                            name="salary" placeholder="salary">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <a href="" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-success float-right">Add</button>
                        </div>
                    </div>
            </form>
        </section>
        <br>
        <section class="content">
    </div>
    </section>
    </div>
@endsection
