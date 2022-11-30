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
        <br>
        <div class="row">
            <div class="col-md-10 ">
                {{ csrf_field() }}
                @foreach ($jobTitle as $row)
                    <div class="intem-main-child">
                        <div class="row" style="border-bottom: 1px solid #ededed">
                            <div class="col-md-5 intem-slide-img">
                                <a href="{{ route('employer.show', $row->id) }}">
                                    <img class="intem-img" src="{{ url('img') }}/{{ $row->image }}" alt="">
                                </a>
                            </div>

                            <div class="col-md-7 name-spotlight">
                                <h3 class="title-spotlight">
                                    <a style="text-decoration: none; color:#d34127"
                                        href="{{ route('employer.show', $row->id) }}">{{ $row->name_company }}</a>
                                </h3>
                                <div class="spotilght-txt">
                                    <p class="loca-spotlight">{{ $row->infor }}
                                    </p>
                                    <div class="spotilght-txt-DC">
                                        <p class="loca-spotlight">{{ $row->address }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
@endsection
