@extends('header')
@section('footer')
<section class="manage__cv">
    <div class="container">
        <div class="title__manage">
            <div class="row">
                <div class="col-md-8">
                    <h3>Manage CV</h3>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="up__cv">Tải CV lên</div>
                        </div>
                        <div class="col-md-6">
                            <div class="add__cv">Tạo CV mới</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="table__manage">
            <table>
                <thead>
                    <tr>
                        <th>CV name</th>
                        <th>CV status</th>
                        <th>Last edited</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ABC</td>
                        <td>Chưa dùng để ứng tuyển</td>
                        <td>10:00 10/10/2022</td>
                        <td class="option__manage">
                            <a href="#"><i class="fa-solid fa-eye"></i></a>
                            <a href="#"><i class="fa-solid fa-trash"></i></a>
                            <a href="#"><i class="fa-solid fa-pen"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>XYZ</td>
                        <td>Đã dùng để ứng tuyển</td>
                        <td>10:00 10/10/2022</td>
                        <td class="option__manage">
                            <a href="#"><i class="fa-solid fa-eye"></i></a>
                            <a href="#"><i class="fa-solid fa-trash"></i></a>
                            <a href="#"><i class="fa-solid fa-pen"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection