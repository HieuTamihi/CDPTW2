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
    <div class="wallpaper">
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-9">
                        <div class="noibat">

                            <div class="content-nb">
                                <h1>{!! $postDetail->title !!}</h1> <br>
                                <p>{!! $postDetail->content !!}</p>
                                {{-- Comment --}}
                                <br>
                                @if (Auth::guest())
                                    <h5>Vui lòng <a style="text-decoration: none; " href="{{ route('login') }}">đăng
                                            nhập</a>
                                        để bình luận</h5>
                                @else
                                    <form action="{{ route('storeComments', $postDetail->id) }}" method="POST"
                                        style="border-top: solid 1px #ededed;padding-top:10px">
                                        @csrf
                                        <div>
                                            <div class="form-group">
                                                <textarea class="form-control" name="comment" placeholder="Hãy nhập bình luận" required maxlength="200"></textarea>
                                            </div>
                                            @error('comment')
                                                <span style="color: red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div style="padding-top:10px">
                                            <input class="btn btn-primary" type="submit" name="submit" id="btn_insert"
                                                value="Gửi">
                                        </div>
                                    </form>
                                @endif
                                <br>

                                <h4 style="border-top: 2px solid #ededed">Bình luận</h4>

                                @if (session('msg'))
                                    <div class="alert alert-success">{{ session('msg') }}</div>
                                @endif
                                @if (empty($resultComment))
                                    <div style="text-align: center">
                                        <div><i class="fa-regular fa-comment fa-2xl"></i></div> <br>
                                        <div> Hãy là người đầu tiên <br> bình luận trong bài</div>
                                    </div>
                                @else
                                    @foreach ($resultComment as $comment)
                                        <div style="background:
                                        #fcfaf6">
                                            <div class="comment-widgets">
                                                <div class="d-flex flex-row comment-row m-t-0">
                                                    <div class="comment-text w-100">
                                                        <h6 class="font-medium">{{ $comment['customers']['email'] }}</h6>
                                                        <span class="m-b-15 d-block">{{ $comment['comment'] }}</span>
                                                        <div class="comment-footer">
                                                            <span
                                                                class="text-muted float-right">{{ date('d-m-Y H:i', strtotime($comment['created_at'])) }}</span>
                                                            @if (Auth::check() && Auth::user()->customer_id == $comment['customers']['id'])
                                                                <button type="button"
                                                                    class="btn btn-success btn-sm">Edit</button>
                                                                <button type="button"
                                                                    class="btn btn-danger btn-sm">Delete</button>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <div class="sidebar">
                            <div class="widget ">
                                <h3>Bài viết xem nhiều</h3> <br>
                                @foreach ($viewMore as $row)
                                    <div class="content-new">
                                        <ul>
                                            <li>
                                                <a href="{{ route('blogDetail', $row->id) }}"><img
                                                        src="{{ asset('img/blogit/' . $row->image) }}" alt=""></a>
                                                <h4><a href="{{ route('blogDetail', $row->id) }}">{{ $row->title }}</a>
                                                </h4>
                                                <div class="meta"><span>Ngày đăng:
                                                        {{ date('d-m-Y', strtotime($row->created_at)) }}</span><br>
                                                    <span>Lượt xem: {{ $row->views }}
                                                        Lượt</span>
                                                </div>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="{{ asset('js/jquery-3.2.1.min.js') }} "></script>
    <script src="{{ asset('js/main.js') }}"></script>
@endsection
