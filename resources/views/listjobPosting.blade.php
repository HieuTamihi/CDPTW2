
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/_jobposting.css')}}">
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
        <div class="container jobposting">
            <div class="table_list_jobposting">
                <a href="./post.html"><button>Add New Post</button></a>
                <table>
                    <tr bgcolor="gray">
                        <th>#</th>
                        <th class="title">Title</th>
                        <th class="experience">Experience</th>
                        <th class="type">Type</th>
                        <th class="skill">Skill</th>
                        <th class="salary">Salary</th>
                        <th class="require">Require</th>
                        <th>Action</th>
                    </tr>
                    <tr bgcolor="lightgray">
                        <td>1</td>
                        <td>Technical Leader</td>
                        <td>5 năm</td>
                        <td>Fulltime</td>
                        <td>Front-end, Back-end, ...</td>
                        <td>1xxx $</td>
                        <td>Dẫn dắt các nhóm phần mềm trên các sản phẩm khác nhau ...</td>
                        <td>
                            <a href="./post.html"><i class="fa-solid fa-eye"></i></a>
                            <a href="./post.html"> <i class="fa-solid fa-pen"></i></a>
                            <a href="#"> <i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr bgcolor="lightgray">
                        <td>2</td>
                        <td>Java Developer</td>
                        <td>4 năm</td>
                        <td>Parttime</td>
                        <td>Java, Javascript, ...</td>
                        <td>8xx $</td>
                        <td>Phân tích các yêu cầu chức năng để chuyển thành thiết kế ứng dụng...</td>
                        <td>
                            <a href="./post.html"><i class="fa-solid fa-eye"></i></a>
                            <a href="./post.html"> <i class="fa-solid fa-pen"></i></a>
                            <a href="#"> <i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr bgcolor="lightgray">
                        <td>3</td>
                        <td>Java Developer</td>
                        <td>2 năm</td>
                        <td>Fulltime</td>
                        <td>Java, Javascript, ...</td>
                        <td>12xx $</td>
                        <td>Phân tích các yêu cầu chức năng để chuyển thành thiết kế ứng dụng...</td>
                        <td>
                            <a href="./post.html"><i class="fa-solid fa-eye"></i></a>
                            <a href="./post.html"> <i class="fa-solid fa-pen"></i></a>
                            <a href="#"> <i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr bgcolor="lightgray">
                        <td>4</td>
                        <td>Java Developer</td>
                        <td>2 năm</td>
                        <td>Fulltime</td>
                        <td>Java, Javascript, ...</td>
                        <td>12xx $</td>
                        <td>Phân tích các yêu cầu chức năng để chuyển thành thiết kế ứng dụng...</td>
                        <td>
                            <a href="./post.html"><i class="fa-solid fa-eye"></i></a>
                            <a href="./post.html"> <i class="fa-solid fa-pen"></i></a>
                            <a href="#"> <i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr bgcolor="lightgray">
                        <td>5</td>
                        <td>Java Developer</td>
                        <td>2 năm</td>
                        <td>Fulltime</td>
                        <td>Java, Javascript, ...</td>
                        <td>12xx $</td>
                        <td>Phân tích các yêu cầu chức năng để chuyển thành thiết kế ứng dụng...</td>
                        <td>
                            <a href="./post.html"><i class="fa-solid fa-eye"></i></a>
                            <a href="./post.html"> <i class="fa-solid fa-pen"></i></a>
                            <a href="#"> <i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <script src="https://kit.fontawesome.com/f6dce9b617.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>
</body>

</html>