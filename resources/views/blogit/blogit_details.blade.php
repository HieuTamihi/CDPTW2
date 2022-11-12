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
<<<<<<< HEAD
                                <h1>{!! $postDetail->title !!}</h1> <br>
                                {{-- <a><img src="{{ asset('img/blogit/' . $postDetail->image) }}"></a> --}}
                                <p>{!! $postDetail->content !!}</p>
                                {{-- Comment --}}
                                <form action="" method="POST" style="border-top: solid 1px #ededed;padding-top:10px">
                                    @csrf
                                    {{-- @method('PUT') --}}
                                    <div>
                                        <div class="form-group">
                                            <textarea id="comment" class="form-control" name="comment" placeholder="Hãy nhập bình luận" required maxlength="200"></textarea>
                                        </div>
                                    </div>
                                    <div style="padding-top:10px">
                                        <input class="btn btn-primary" type="submit" name="submit" id="btn_insert"
                                            value="Gửi">
                                    </div>
                                </form>

                                <br>
                                @foreach ($resultComments as $resultComment)
                                    <div class="comment-widgets">
                                        <div class="d-flex flex-row comment-row m-t-0">
                                            <div class="comment-text w-100">
                                                <h6 class="font-medium">James Thomas</h6> <span
                                                    class="m-b-15 d-block">{{ $resultComment->comment }} </span>
                                                <div class="comment-footer"> <span class="text-muted float-right">April
                                                        14,2019</span>
                                                    <button type="button" class="btn btn-success btn-sm">Edit</button>
                                                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <br>
=======
                                <h4>{{ $postDetail->title }}</h4> <br>
                                <a><img src="{{ asset('img/blogit/' . $postDetail->image) }}"></a>
                                <p>{{ $postDetail->content }}</p>
                                {{-- Comment --}}
                                <form action="" method="POST" style="border-top: solid 1px #ededed;padding-top:10px">
                                    @csrf
                                    <div>
                                        <div class="form-group">
                                            <textarea class="form-control" name="comment" placeholder="Hãy nhập bình luận" required maxlength="200"></textarea>
                                        </div>
                                    </div>
                                    <div style="padding-left:915px;padding-top:10px"><input class="btn btn-primary"
                                            type="submit" name="submit" value="Gửi"> </div>
                                </form>
>>>>>>> blog_home
                                {{-- Comment --}}
                            </div>
                        </div>
                    </div>
<<<<<<< HEAD
=======

>>>>>>> blog_home
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
