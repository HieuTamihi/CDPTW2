@extends('header')
@section('footer')
<div class="container">
    <div class="content_company">
        <h3>Thông tin công ty</h3>
        <div class="content_company__detail">
            <label for="img">Image</label>
            <img src="./img/Vietnam.png" alt=""> <br>
            <label for="name_company">Name Company</label>
            <span class="content_company__name">Công Ty Cổ Phần ABC</span><br>
            <label for="address">Address</label>
            <span class="content_company__address">123 Võ Văn Ngân - phường Linh Chiểu - Quận Thủ Đức -
                TP.HCM</span>
            <br>
            <label for="email">Email</label>
            <span class="content_company__email">abc@gmail.com</span>
            <br>
            <label for="phone">Phone Number</label>
            <span class="content_company__phone">090 xxx xxx</span>
        </div>
        <a href="./change_company_infor.html"><button type="submit">Edit Infor</button></a>
    </div>
</div>
@endsection