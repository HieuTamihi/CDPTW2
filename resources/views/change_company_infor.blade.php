<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./public/css/_change_infor_company.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./public/css/style.css" />
</head>

<body>
    <section class="slidebar">
        <div class="slidebar__brand">
            <h5><i class="fa-solid fa-house"></i><span>IT Works</span></h5>
        </div>
        <div class="account__admin">
            <a href="#"><i class="fa-brands fa-github"></i><span>Thanh</span> </a>
        </div>
        <div class="slidebar__menu">
            <ul>
                <li> <a href="#"><i class="fa-regular fa-user"></i></i>Customer </a></li>
                <li> <a href="#"><i class="fa-solid fa-pen-to-square"></i>Employer </a></li>
                <li> <a href="#"><i class="fa-brands fa-github"></i>Dashboard </a></li>
                <li> <a href="#"><i class="fa-brands fa-github"></i>Dashboard </a></li>
                <li> <a href="#"><i class="fa-solid fa-right-from-bracket"></i>Logout</a></li>

            </ul>
        </div>
    </section>
    <section class="main__content">
        <header class="main__header">
            <div class="top__header">
                <h2><i class="fas fa-bars"></i>Dashboard</h2>
            </div>
            <div class="top__header">
                <input class="top__header--search" type="text" placeholder="Tìm kiếm"><i
                    class="fa-sharp fa-solid fa-magnifying-glass"></i>

            </div>
            <div class="top__header" style="padding-left:180px">
                <ul>
                    <li> <a href="#"><i class="fa-regular fa-message"></i></a></li>
                    <li> <a href="#"><i class="fa-regular fa-bell"></i></a></li>
                </ul>
            </div>
        </header>
        <div class="container">
            <div class="content_company">
                <h3>Thông tin công ty</h3>
                <div class="infor_detail">
                    <div class="row">
                        <div class="col-md-2"> <label for="img">Image</label></div>
                        <div class="col-md-5"> <img src="./public/img/Vietnam.png" alt=""></div>
                        <div class="col-md-5" style="position: relative;">
                            <p class="change_img"></p>
                            <input type="file" style="width:27%; position: absolute; bottom: 16px; left: 86px;">
                        </div>
                    </div><br>
                    <label for="name_company">Name Company</label>
                    <input type="text" placeholder="Công Ty Cổ Phần ABC" class="name_company"><br>
                    <label for="address">Address</label>
                    <input type="text" class="address"
                        placeholder="123 Võ Văn Ngân - phường Linh Chiểu - Quận Thủ Đức - TP.HCM"><br>
                    <label for="email">Email</label>
                    <input type="text" class="email" placeholder="abc@gmail.com"><br>
                    <label for="phone">Phone Number</label>
                    <input type="text" class="phone" placeholder="090 xxx xxx">
                </div>
                <a href="./company_infor.html"><button type="submit">Change</button></a>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>