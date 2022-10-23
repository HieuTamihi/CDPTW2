<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage CV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/manage_cv.css">
</head>
<body>
    <section class="manage__cv">
        <div class="container">
            <div class="title__manage">
                <h3>Manage CV</h3>
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
    <script src="https://kit.fontawesome.com/f6dce9b617.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>