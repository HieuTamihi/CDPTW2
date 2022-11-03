@extends('header')
@section('footer')
    <!-- Search -->
    <div class="search container">
        <form action="{{ route('search') }}" method="GET">
            <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
            <input type="text" class="search__input form-control" name="keyword" placeholder="Nhập từ khoá tìm kiếm">
            <button type="submit" class="search__btn btn btn-danger">Tìm kiếm</button>
        </form>
    </div>

    @if (count($jobTitle) == '0')
        <div style="font-size: 20px; text-align:center">
            <span>OOPS!
                Hiện tại chúng tôi không thể tìm thấy công việc <strong>{{ $request->keyword }}</strong> mà bạn đang yêu
                cầu.

            </span>
            <ul>
                <li>Kiểm tra lỗi chính tả của từ khóa đã nhập</li>
                <li>Thử lại bằng từ khóa khác</li>
                <li>Thử lại bằng những từ khóa ngắn gọn hơn</li>
            </ul>
        </div>
    @else
        <p>dadsads</p>
    @endif
@endsection
