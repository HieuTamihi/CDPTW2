@extends('DashboardTemplate.dashboardHeader')
@section('main')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
           <a href=""><button class="btn btn-primary" style="float: right;">List Post</button></a>
           <br>
           <br>
        <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" style="width:22%;">Title</th>
                        <th scope="col" style="width:10%;">Experience</th>
                        <th scope="col" style="width:7%;">Type</th>
                        <th scope="col" style="width:10%;">Skill</th>
                        <th scope="col" style="width:30%;">Required</th>
                        <th scope="col" style="width:8%;">Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       <td>{{$show->title}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection