<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    @foreach($job as $value)
    <div class="header_mail">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3">
                <img src="{{$value->empl->image}}" alt="" style="width:100%;">
            </div>
            <div class="col-md-7" style="text-align: center;">
                <h3 style="text-transform: uppercase;">Thư Mời Phỏng Vấn</h3>
                <p>V/v tham dự phỏng vấn</p>
            </div>
            <div class="col-md-1"></div>
        </div>

    </div>
    <div class="content_mail">
        <h5>Hi {{$customer->fullname}} thân mến</h5> <br>
        <p>Đầu tiên chúng tôi rất cảm ơn vì bạn đã dành sự quan tâm và nộp hồ sơ đăng ký tuyển dụng vào {{$value->title}}</p> <br>
        <p>Công ty <strong>{{$value->empl->name_company}}</strong> mời bạn tham dự vào buổi phỏng vấn vào công việc {{$value->title}}. Mời bạn vào lúc 8h00 ngày {{$tomorrow->day}} tháng {{$tomorrow->month}}
            đến tại địa chỉ {{$value->empl->address}} để tham dự buổi phỏng vẫn của công ty. </p> <br>
        <p>Mọi thắc mắc bạn có thể liên hệ qua email {{$value->empl->email}} hoặc số điện thoại {{$value->empl->phone_number}} hoặc thông tin website {{$value->empl->website}}</p> <br>
        <p>Công ty <strong>{{$value->empl->name_company}}</strong> trân trọng thông báo</p>
    </div>
    @endforeach
    <div class="footer">

    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>