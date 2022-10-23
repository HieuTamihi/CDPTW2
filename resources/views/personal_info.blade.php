<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal infomation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/personal_info.css">
</head>
<body>
    <div class="personal__info">
        <div class="container">
            <div class="title__personal">
                <h5>Personal information</h5>
            </div>
            <form action="" class="form__info">
                <div class="input__name">
                    <div class="lb__fullname">
                        <label for="name">Full name</label><span>*</span>
                    </div>
                    <input type="text" required>
                </div>
                <div class="input__date">
                    <div class="lb__date">
                        <label for="date">Date of birth</label><span>*</span>
                    </div>
                    <input type="text" required>
                </div>
                <div class="input__phone">
                    <div class="lb__phone">
                        <label for="phone">Phone</label><span>*</span>
                    </div>                  
                    <input type="text" required>
                </div>
                <div class="input__email">
                    <div class="lb__email">
                        <label for="email">Email</label><span>*</span>
                    </div>
                    <input type="text" required>
                </div>
                <div class="input__address">
                    <div class="lb__address">
                        <label for="address">Address</label>
                    </div>
                    <input type="text">
                </div>
                <div class="select__gender">
                    <div class="lb__gender">
                        <label for="gender">Gender</label>
                    </div>
                    <Select>
                        <option value="">Male</option>
                        <option value="">Female</option>
                        <option value="">Other</option>
                    </Select>
                </div>
                <div class="area__favorite">
                    <div class="lb_favorite">
                        <label for="favorite">Favorite technology</label>
                    </div>
                    <textarea name="favorite"></textarea>
                </div>
                <input type="submit" value="Save" class="btn save__btn">
                <input type="submit" value="Change password" class="btn change__btn">
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>