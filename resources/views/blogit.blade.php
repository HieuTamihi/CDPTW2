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
    <div class="wallpaper">
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-9">
                        <div class="noibat">
                            <h2 class="title-news">Bài viết nổi bật</h2>
                            <div class="content-nb">
                                <a href="#"><img src="{{ asset('img/noibat.jpg') }}" alt="Bai viet noi bat"></a>
                                <h4><a href="#">Hướng dẫn chuyển html sang wordpress khởi tạo dự án</a></h4>
                                <div class="meta">
                                    <span>Ngày đăng: 30-09-2017</span>
                                    <span>Lượt xem: 2344 Lượt</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum libero unde. Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit. Ipsum libero unde laudantium
                                    sapiente atque odio at facere nemo aperiam.</p>
                            </div>
                            <div class="list-nb">
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 style-box">
                                        <div class="list-post">
                                            <a href="#"><img src="{{ asset('img/img.jpg') }}" alt="Bai 1"></a>
                                            <h4>
                                                <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit.</a>
                                            </h4>
                                            <div class="meta">
                                                <span>Ngày đăng: 30-09-2017</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 style-box">
                                        <div class="list-post">
                                            <a href="#"><img src="{{ asset('img/img-1') }}.jpg" alt="Bai 1"></a>
                                            <h4>
                                                <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit.</a>
                                            </h4>
                                            <div class="meta">
                                                <span>Ngày đăng: 30-09-2017</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 style-box">
                                        <div class="list-post">
                                            <a href="#"><img src="{{ asset('img/img-2') }}.jpg" alt="Bai 1"></a>
                                            <h4>
                                                <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit.</a>
                                            </h4>
                                            <div class="meta">
                                                <span>Ngày đăng: 30-09-2017</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-news">
                            <h2 class="title-news">Bài viết mới nhất</h2>
                            <div class="content-news">
                                <div class="news-detail">
                                    <a href="#"><img src="{{ asset('img/post.jpg') }}" alt="Bài viết mới nhất"></a>
                                    <div class="info-post">
                                        <h4><a href="#">Bài viết mới nhất của chủ đề hướng dẫn wordpress</a></h4>
                                        <div class="meta">
                                            <span>Ngày đăng: 12-23-2016</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, sapiente
                                            mollitia, dolore minus et eligendi quod perspiciatis placeat iure deleniti
                                            obcaecati blanditiis eius sit! Consectetur ullam praesentium deserunt
                                            ratione hic.</p>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="news-detail">
                                    <a href="#"><img src="{{ asset('img/post.jpg') }}" alt="Bài viết mới nhất"></a>
                                    <div class="info-post">
                                        <h4><a href="#">Bài viết mới nhất của chủ đề hướng dẫn wordpress</a></h4>
                                        <div class="meta">
                                            <span>Ngày đăng: 12-23-2016</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, sapiente
                                            mollitia, dolore minus et eligendi quod perspiciatis placeat iure deleniti
                                            obcaecati blanditiis eius sit! Consectetur ullam praesentium deserunt
                                            ratione hic.</p>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="news-detail">
                                    <a href="#"><img src="{{ asset('img/post.jpg') }}" alt="Bài viết mới nhất"></a>
                                    <div class="info-post">
                                        <h4><a href="#">Bài viết mới nhất của chủ đề hướng dẫn wordpress</a></h4>
                                        <div class="meta">
                                            <span>Ngày đăng: 12-23-2016</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, sapiente
                                            mollitia, dolore minus et eligendi quod perspiciatis placeat iure deleniti
                                            obcaecati blanditiis eius sit! Consectetur ullam praesentium deserunt
                                            ratione hic.</p>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="news-detail">
                                    <a href="#"><img src="{{ asset('img/post.jpg') }}" alt="Bài viết mới nhất"></a>
                                    <div class="info-post">
                                        <h4><a href="#">Bài viết mới nhất của chủ đề hướng dẫn wordpress</a></h4>
                                        <div class="meta">
                                            <span>Ngày đăng: 12-23-2016</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, sapiente
                                            mollitia, dolore minus et eligendi quod perspiciatis placeat iure deleniti
                                            obcaecati blanditiis eius sit! Consectetur ullam praesentium deserunt
                                            ratione hic.</p>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="news-detail">
                                    <a href="#"><img src="{{ asset('img/post.jpg') }}" alt="Bài viết mới nhất"></a>
                                    <div class="info-post">
                                        <h4><a href="#">Bài viết mới nhất của chủ đề hướng dẫn wordpress</a></h4>
                                        <div class="meta">
                                            <span>Ngày đăng: 12-23-2016</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, sapiente
                                            mollitia, dolore minus et eligendi quod perspiciatis placeat iure deleniti
                                            obcaecati blanditiis eius sit! Consectetur ullam praesentium deserunt
                                            ratione hic.</p>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="news-detail">
                                    <a href="#"><img src="{{ asset('img/post.jpg') }}" alt="Bài viết mới nhất"></a>
                                    <div class="info-post">
                                        <h4><a href="#">Bài viết mới nhất của chủ đề hướng dẫn wordpress</a></h4>
                                        <div class="meta">
                                            <span>Ngày đăng: 12-23-2016</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, sapiente
                                            mollitia, dolore minus et eligendi quod perspiciatis placeat iure deleniti
                                            obcaecati blanditiis eius sit! Consectetur ullam praesentium deserunt
                                            ratione hic.</p>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="news-detail">
                                    <a href="#"><img src="{{ asset('img/post.jpg') }}" alt="Bài viết mới nhất"></a>
                                    <div class="info-post">
                                        <h4><a href="#">Bài viết mới nhất của chủ đề hướng dẫn wordpress</a></h4>
                                        <div class="meta">
                                            <span>Ngày đăng: 12-23-2016</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, sapiente
                                            mollitia, dolore minus et eligendi quod perspiciatis placeat iure deleniti
                                            obcaecati blanditiis eius sit! Consectetur ullam praesentium deserunt
                                            ratione hic.</p>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="news-detail">
                                    <a href="#"><img src="{{ asset('img/post.jpg') }}"
                                            alt="Bài viết mới nhất"></a>
                                    <div class="info-post">
                                        <h4><a href="#">Bài viết mới nhất của chủ đề hướng dẫn wordpress</a></h4>
                                        <div class="meta">
                                            <span>Ngày đăng: 12-23-2016</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, sapiente
                                            mollitia, dolore minus et eligendi quod perspiciatis placeat iure deleniti
                                            obcaecati blanditiis eius sit! Consectetur ullam praesentium deserunt
                                            ratione hic.</p>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="news-detail">
                                    <a href="#"><img src="{{ asset('img/post.jpg') }}"
                                            alt="Bài viết mới nhất"></a>
                                    <div class="info-post">
                                        <h4><a href="#">Bài viết mới nhất của chủ đề hướng dẫn wordpress</a></h4>
                                        <div class="meta">
                                            <span>Ngày đăng: 12-23-2016</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, sapiente
                                            mollitia, dolore minus et eligendi quod perspiciatis placeat iure deleniti
                                            obcaecati blanditiis eius sit! Consectetur ullam praesentium deserunt
                                            ratione hic.</p>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="news-detail">
                                    <a href="#"><img src="{{ asset('img/post.jpg') }}"
                                            alt="Bài viết mới nhất"></a>
                                    <div class="info-post">
                                        <h4><a href="#">Bài viết mới nhất của chủ đề hướng dẫn wordpress</a></h4>
                                        <div class="meta">
                                            <span>Ngày đăng: 12-23-2016</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, sapiente
                                            mollitia, dolore minus et eligendi quod perspiciatis placeat iure deleniti
                                            obcaecati blanditiis eius sit! Consectetur ullam praesentium deserunt
                                            ratione hic.</p>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="quatrang">
                                <span>1</span>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#">...</a>
                                <a href="#">4</a>
                                <a href="#">5</a>
                                <a href="#">6</a>
                                <a href="#">Tiep theo</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <div class="sidebar">

                            <div class="widget">
                                <h3>Bài viết mới</h3>
                                <div class="content-new">
                                    <ul>
                                        <li>
                                            <a href="#"><img src="{{ asset('img/news.png') }}" alt=""></a>
                                            <h4><a href="#">7 kênh youtube học lập trình web tốt nhất thế giới
                                                    giúp bạn nâng cao kỹ năng</a></h4>
                                            <div class="meta"><span>Ngày đăng: 22-02-2016</span></div>
                                            <div class="clear"></div>
                                        </li>
                                        <li>
                                            <a href="#"><img src="{{ asset('img/news.png') }}" alt=""></a>
                                            <h4><a href="#">Học HTML & CSS, học front end thông qua dự án thực
                                                    tế</a></h4>
                                            <div class="meta"><span>Ngày đăng: 22-02-2016</span></div>
                                            <div class="clear"></div>
                                        </li>
                                        <li>
                                            <a href="#"><img src="{{ asset('img/news.png') }}" alt=""></a>
                                            <h4><a href="#">5 frameworks frontend miễn phí tốt nhất cho dự án web
                                                    của bạn</a></h4>
                                            <div class="meta"><span>Ngày đăng: 22-02-2016</span></div>
                                            <div class="clear"></div>
                                        </li>
                                        <li>
                                            <a href="#"><img src="{{ asset('img/news.png') }}" alt=""></a>
                                            <h4><a href="#">Những đoạn code hay dùng trong lập trình theme
                                                    woocommecre wordpressg</a></h4>
                                            <div class="meta"><span>Ngày đăng: 22-02-2016</span></div>
                                            <div class="clear"></div>
                                        </li>
                                        <li>
                                            <a href="#"><img src="{{ asset('img/news.png') }}" alt=""></a>
                                            <h4><a href="#">Share plugin get bài viết từ 10 trang báo nổi tiếng
                                                    của Việt Nam</a></h4>
                                            <div class="meta"><span>Ngày đăng: 22-02-2016</span></div>
                                            <div class="clear"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget">
                                <h3>Bài viết xem nhiều</h3>
                                <div class="content-mostv">
                                    <ul>
                                        <li>
                                            <span>1</span>
                                            <h4><a href="#">Download file psd background chương trình, hội
                                                    nghị</a></h4>
                                            <div class="clear"></div>
                                        </li>
                                        <li>
                                            <span>2</span>
                                            <h4><a href="#">Download miễn phí phần mềm Adobe indesign CS4 &
                                                    CS5</a></h4>
                                            <div class="clear"></div>
                                        </li>
                                        <li>
                                            <span>3</span>
                                            <h4><a href="#">Du hí Quảng Nam – Làng bích họa – Tượng đài Mẹ
                                                    Thứ</a></h4>
                                            <div class="clear"></div>
                                        </li>
                                        <li>
                                            <span>4</span>
                                            <h4><a href="#">Du hí Quảng Nam – Thánh địa Mỹ Sơn</a></h4>
                                            <div class="clear"></div>
                                        </li>
                                        <li>
                                            <span>5</span>
                                            <h4><a href="#">Share full code website tin tức sử dụng wordpress</a>
                                            </h4>
                                            <div class="clear"></div>
                                        </li>
                                        <li>
                                            <span>6</span>
                                            <h4><a href="#">Share full code web shop, web bán hàng sử dụng
                                                    wordpress</a></h4>
                                            <div class="clear"></div>
                                        </li>
                                        <li>
                                            <span>7</span>
                                            <h4><a href="#">Những câu hỏi thường gặp khi đi phỏng vấn lập trình
                                                    php</a></h4>
                                            <div class="clear"></div>
                                        </li>
                                        <li>
                                            <span>8</span>
                                            <h4><a href="#">10 đoạn code đếm ngược sử dụng script cực đẹp, miễn
                                                    phí</a></h4>
                                            <div class="clear"></div>
                                        </li>
                                    </ul>
                                </div>
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
