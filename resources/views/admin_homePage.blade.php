<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <script src="https://kit.fontawesome.com/f6dce9b617.js" crossorigin="anonymous"></script>
    <script defer src="{{asset('bootstrap.js')}}"></script>
    <title>Document</title>
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
                @if(Auth::check())
                <form method="POST" name="logout" action="{{ route('logout') }}">
                    @csrf
                    <li> <a href="javascript:document.logout.submit()"><i class="fa-solid fa-right-from-bracket"></i>Logout</a></li>
                </form>
                @else
                <li> <a href="{{route('login')}}"><i class="fa-solid fa-right-from-bracket"></i>Login</a></li>
                @endif
            </ul>
        </div>
    </section>
    <section class="main__content">
        <header class="main__header">
            <div class="top__header">
                <h2><i class="fas fa-bars"></i>Dashboard</h2>
            </div>
            <div class="top__header">
                <input class="top__header--search" type="text" placeholder="Tìm kiếm"><i class="fa-sharp fa-solid fa-magnifying-glass"></i>

            </div>
            <div class="top__header" style="padding-left:180px">
                <ul>
                    <li> <a href="#"><i class="fa-regular fa-message"></i></a></li>
                    <li> <a href="#"><i class="fa-regular fa-bell"></i></a></li>
                </ul>
            </div>
        </header>
        <div class="body">
            <div class="manager__user">
                <h4>Manager User</h4>
                <table class="table table-striped align-middle">
                    <thead>
                        <tr>
                            <th scope=" col">ID</th>
                            <th scope="col">Fullname</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>lore</td>
                            <td>
                                <a href=""><i class="fa-solid fa-pen"></i>Edit</a>
                                <!-- <a href=""><i class="fa-solid fa-trash"></i>Delete</a> -->
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td> <a href=""><i class="fa-solid fa-pen"></i>Edit</a></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry the Bird</td>
                            <td>Larry the Bird</td>
                            <td>Larry the Bird</td>
                            <td> <a href=""><i class="fa-solid fa-pen"></i>Edit</a></td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>

    </section>
    <!-- Admin home page -->

</body>

</html>