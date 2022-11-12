@extends('header')
@section('footer')
<section class="manage__cv">
    <div class="container">
        <div class="title__manage">
            <h3>Job applied for</h3>
        </div>
        <div class="table__manage">
            <table>
                <thead>
                    <tr>
                        <th>Tên vị trí</th>
                        <th>Tên công ty</th>
                        <th>Ngày ứng tuyển</th>
                        <th>Trạng thái</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ABC</td>
                        <td>Chưa dùng để ứng tuyển</td>
                        <td>10:00 10/10/2022</td>
                        <td>Gửi hồ sơ cho nhà tuyển dụng</td>
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
                        <td>Gửi hồ sơ cho nhà tuyển dụng</td>   
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