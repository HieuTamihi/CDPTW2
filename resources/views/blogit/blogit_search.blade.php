@extends('header')
@section('footer')
    <!-- Search -->
    <div class="search container">
        <form action="{{ route('blogSearch') }}" method="GET">
            <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
            <input type="text" class="search__input form-control" name="keyword" placeholder="Nhập từ khoá tìm kiếm">
            <button type="submit" class="search__btn btn btn-danger">Tìm kiếm</button>
        </form>
    </div>
    @if (count($blogSearch) == '0')
        <div style="font-size: 20px; text-align:center">
            <span>OOPS! Hiện tại chúng tôi không thể tìm thấy <strong>{{ $request->keyword }}</strong> mà bạn đang yêu cầu.
            </span>
            <ul>
                <li>Kiểm tra lỗi chính tả của từ khóa đã nhập</li>
                <li>Thử lại bằng từ khóa khác</li>
                <li>Thử lại bằng những từ khóa ngắn gọn hơn</li>
            </ul>
        </div>
    @else
        <div class="content-news" style="padding: 50px 300px">
            @foreach ($blogSearch as $row)
                <div class="news-detail">
                    <a href="{{ route('blogDetail', $row->id) }}"><img src="{{ asset('img/blogit/' . $row->image) }}"
                            alt="Bài viết mới nhất"></a>
                    <div class="info-post">
                        <h4><a href="{{ route('blogDetail', $row->id) }}">{{ $row->title }}</a></h4>
                        <div class="meta">
                            <span>Ngày đăng: {{ date('d-m-Y', strtotime($row->created_at)) }}</span> <br> <span>Lượt xem:
                                2342
                                Lượt</span>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            @endforeach
            <div class="paginator ">
                {{ $blogSearch->links() }}
            </div>
        </div>
    @endif
@endsection
