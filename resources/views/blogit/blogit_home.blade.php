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
                    {{--  --}}
                    <div class="col-xs-12 col-sm-12 col-md-9">
                        <div class="noibat">
                            {{-- BAI VIET NOI BAT --}}
                            @if (isset($featuredPosts))
                                <h2 class="title-news">Bài viết nổi bật</h2>
                                <div class="content-nb">
                                    <a href="{{ route('blogDetail', $featuredPosts->id) }}"><img
                                            src="{{ asset('img/blogit/' . $featuredPosts->image) }}"></a>
                                    <h4><a
                                            href="{{ route('blogDetail', $featuredPosts->id) }}">{{ $featuredPosts->title }}</a>
                                    </h4>
                                    <div class="meta">
                                        <span>Ngày đăng: {{ date('d-m-Y', strtotime($featuredPosts->created_at)) }}</span>
                                        <span>Lượt xem: {{ $featuredPosts->views }}</span>
                                    </div>
                                </div>
                            @else
                                <h2 class="title-news">Bài viết nổi bật</h2>
                                <div class="content-nb">
                                    <a href="{{ route('blogDetail', $featuredPostsViews->id) }}"><img
                                            src="{{ asset('img/blogit/' . $featuredPostsViews->image) }}"></a>
                                    <h4><a
                                            href="{{ route('blogDetail', $featuredPostsViews->id) }}">{{ $featuredPostsViews->title }}</a>
                                    </h4>
                                    <div class="meta">
                                        <span>Ngày đăng:
                                            {{ date('d-m-Y', strtotime($featuredPostsViews->created_at)) }}</span>
                                        <span>Lượt xem: {{ $featuredPostsViews->views }}</span>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="post-news">
                            <h2 class="title-news">Bài viết mới nhất</h2>
                            <div class="content-news">
                                @foreach ($newPost as $row)
                                    <div class="news-detail">
                                        <a href="{{ route('blogDetail', $row->id) }}"><img
                                                src="{{ asset('img/blogit/' . $row->image) }}" alt="Bài viết mới nhất"></a>
                                        <div class="info-post">
                                            <h4><a href="{{ route('blogDetail', $row->id) }}">{{ $row->title }}</a></h4>
                                            <div class="meta">
                                                <span>Ngày đăng: {{ date('d-m-Y', strtotime($row->created_at)) }}</span>
                                                <br> <span>Lượt xem: {{ $row->views }}</span>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="paginator">
                                {{ $newPost->links() }}
                            </div>
                        </div>
                    </div>
                    {{--  --}}
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
