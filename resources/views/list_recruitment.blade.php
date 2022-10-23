<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./public/css/_list_recruitment.css">
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
            <div class="content">
                <div class="content__post">
                    <h3>Employment information</h3>
                    <label for="">Title</label>
                    <span class="content__post__title">Technical Leader</span> <br>
                    <label for="">Experience</label>
                    <span class="content__post__exp">5 năm</span> <br>
                    <label for="">Type</label>
                    <span class="content__post__type">Fulltime</span> <br>
                    <label for="">Skill</label>
                    <span class="content__post__skill">Front-end, Back-end, Javascript</span> <br>
                    <label for="">Salary</label>
                    <span class="content__post__salary">1xxx $</span> <br>
                    <label for="">Require</label>
                    <span class="content__post__require">Dẫn dắt các nhóm phần mềm trên các sản phẩm khác nhau, Khả nắng
                        xử lý tình huống, trao đổi thông tin </span>
                </div>
                <div class="content__recruitment_list">
                    <h2>List Recruitment</h2>
                    <form action="#">
                        <table>
                            <tr bgcolor="gray">
                                <th>#</th>
                                <th>Full name</th>
                                <th>Apply position</th>
                                <th>Email</th>
                                <th>Exp_work</th>
                                <th>Status</th>
                                <th>Phone</th>
                                <th>Programming skills</th>
                                <th>Action</th>
                            </tr>
                            <tr bgcolor="lightgray">
                                <td>1</td>
                                <td>Nguyễn Văn A</td>
                                <td>Dev</td>
                                <td>nhomc@gmail.com</td>
                                <td>5 năm</td>
                                <td>Chưa xem</td>
                                <td>090 xxx xxx</td>
                                <td>HTML, CSS, JS, PHP</td>
                                <td>
                                    <a href="./detail_recruitment.html"><i class="fa-solid fa-eye"></i></a>
                                    <a href="#"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr bgcolor="lightgray">
                                <td>2</td>
                                <td>Nguyễn Văn B</td>
                                <td>QC</td>
                                <td>nhomc@gmail.com</td>
                                <td>5 năm</td>
                                <td>Chưa xem</td>
                                <td>090 xxx xxx</td>
                                <td>HTML, CSS, JS, PHP</td>
                                <td>
                                    <a href="./detail_recruitment.html"><i class="fa-solid fa-eye"></i></a>
                                    <a href="#"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr bgcolor="lightgray">
                                <td>3</td>
                                <td>Nguyễn Văn C</td>
                                <td>Dev</td>
                                <td>nhomc@gmail.com</td>
                                <td>5 năm</td>
                                <td>Đã xem</td>
                                <td>090 xxx xxx</td>
                                <td>HTML, CSS, JS, PHP</td>
                                <td>
                                    <a href="./detail_recruitment.html"><i class="fa-solid fa-eye"></i></a>
                                    <a href="#"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr bgcolor="lightgray">
                                <td>4</td>
                                <td>Nguyễn Văn D</td>
                                <td>QC</td>
                                <td>nhomc@gmail.com</td>
                                <td>5 năm</td>
                                <td>Đã xem</td>
                                <td>090 xxx xxx</td>
                                <td>HTML, CSS, JS, PHP</td>
                                <td>
                                    <a href="./detail_recruitment.html"><i class="fa-solid fa-eye"></i></a>
                                    <a href="#"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr bgcolor="lightgray">
                                <td>5</td>
                                <td>Nguyễn Văn X</td>
                                <td>Dev</td>
                                <td>nhomc@gmail.com</td>
                                <td>5 năm</td>
                                <td>Đã xem</td>
                                <td>090 xxx xxx</td>
                                <td>HTML, CSS, JS, PHP</td>
                                <td>
                                    <a href="./detail_recruitment.html"><i class="fa-solid fa-eye"></i></a>
                                    <a href="#"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr bgcolor="lightgray">
                                <td>6</td>
                                <td>Nguyễn Văn Y</td>
                                <td>Dev</td>
                                <td>nhomc@gmail.com</td>
                                <td>5 năm</td>
                                <td>Đã xem</td>
                                <td>090 xxx xxx</td>
                                <td>HTML, CSS, JS, PHP</td>
                                <td>
                                    <a href="./detail_recruitment.html"><i class="fa-solid fa-eye"></i></a>
                                    <a href="#"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr bgcolor="lightgray">
                                <td>7</td>
                                <td>Nguyễn Văn Z</td>
                                <td>Dev</td>
                                <td>nhomc@gmail.com</td>
                                <td>5 năm</td>
                                <td>Đã xem</td>
                                <td>090 xxx xxx</td>
                                <td>HTML, CSS, JS, PHP</td>
                                <td>
                                    <a href="./detail_recruitment.html"><i class="fa-solid fa-eye"></i></a>
                                    <a href="#"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://kit.fontawesome.com/f6dce9b617.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>