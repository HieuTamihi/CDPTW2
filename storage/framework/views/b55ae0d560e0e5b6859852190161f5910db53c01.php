
<?php $__env->startSection('footer'); ?>
<!-- Search -->
<div class="search container">
    <form action="">
        <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
        <input type="text" class="search__input form-control" placeholder="Nhập từ khoá tìm kiếm">
        <button type="submit" class="search__btn btn btn-danger">Tìm kiếm</button>
    </form>
</div>
<div class="container">
    <div class="detail__body">
        <div class="row">
            <div class="col-12 col-xl-9 detail_body__left">
                <div class="information">
                    <div class="information__logo">
                        <a href="#"><img src="<?php echo e(asset('img/TopDev-Asset-15-1643008749.png')); ?>" alt=""></a>
                    </div>
                    <div class="information__content">
                        <p>Viettel Digital</p>
                        <p>Theo cách của bạn</p>
                    </div>
                </div>
                <div class="navi">
                    <a href="#CV">
                        <h6>Về công ty</h6>
                    </a>
                    <a href="#responsibility">
                        <h6>Công việc</h6>
                    </a>
                    <h6>Chia sẻ</h6>
                    <h6 class="navi__fol">Theo dõi</h6>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-12 col-xl-9 content__left">
                            <h4>Full-stack Developer (Java, JavaScript)</h4>
                            <p>Lên tới 2*** USD</p>
                            <a href="#" class="font-size_a">
                                <p>Đăng nhập để xem mức lương</p>
                            </a>
                            <p>Tổng Công ty Dịch vụ số Viettel - Viettel Digital mang sứ mệnh sáng tạo những sản
                                phẩm
                                công nghệ đi đầu lĩnh vực Fintech và Big Data, với mong muốn digital hoá những hình
                                thức
                                kinh doanh truyền thống.</p>
                            <p>Hiện Viettel Digital đang tập trung phát triển một hệ sinh thái tài chính số với core
                                chính là Viettel Money. Bên cạnh đó, chúng tôi cũng đang mở rộng hoạt động với nhiều
                                dự
                                án lớn trong các lĩnh vực Fintech, Big Data, AI, Blockchain,... và mong muốn chiêu
                                mộ
                                nhân tài hơn bao giờ hết.</p>
                            <p>Viettel Digital đang tuyển dụng những <strong>Fullstack Developer</strong> đẳng cấp.
                            </p>
                            <h2>Trách nhiệm công việc:</h2>
                            <div class="content__left__responsibility" id="responsibility">
                                <ul>
                                    <li>Tham gia phát triển các dự án trong Hệ sinh thái Tài chính số (Viettel Pay,
                                        Mobile Money, ví cá nhân, ví doanh nghiệp, ...)</li>
                                    <li>Cung cấp sản phẩm ứng dụng thanh toán và chuyển tiền với số lượng giao dịch
                                        rất
                                        lớn, đòi hỏi hiệu năng xử lý cao</li>
                                    <li>Xây dựng các hệ thống Tài chính điện tử cho các thị trường nước ngoài mà
                                        Viettel
                                        đầu tư</li>
                                </ul>
                            </div>
                            <h2>Kỹ năng & Chuyên môn:</h2>
                            <div class="content__left__specialize">
                                <ul>
                                    <li>Tốt nghiệp Đại học loại Khá trở lên, chuyên ngành Công nghệ thông tin, Kỹ sư
                                        phần mềm. Ưu tiên tốt nghiệp từ các trường Đại học Bách khoa Hà Nội, Học
                                        viện
                                        Công nghệ Bưu chính viễn thông, Đại học FPT, …</li>
                                    <li>Có kinh nghiệm từ 1 năm trong các ngôn ngữ lập trình: Java, JavaScript</li>
                                    <li>Nắm vững giao thức http, mô hình MVC, mô hình client server.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-xl-3 content__right">
                            <button type=" button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Ứng tuyển ngay</button>
                            <p class="text_align">Hoặc</p>
                            <a href="#" class="format_a text_align">
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Bạn đang ứng tuyển
                                                    tại công ty TDC</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="">
                                                    <div class="input__field d-flex">
                                                        <label for="">Họ và tên</label>
                                                        <input class="input__input form-control" type="text" placeholder="Vui lòng nhập họ và tên">
                                                    </div>
                                                    <div class="input__field d-flex">
                                                        <label for="">Địa chỉ</label>
                                                        <input class="input__input form-control" type="text" placeholder="Vui lòng nhập địa chỉ">
                                                    </div>
                                                    <div class="input__field d-flex">
                                                        <label for="">Email</label>
                                                        <input class="input__input form-control" type="email" placeholder="Vui lòng nhập email">
                                                    </div>
                                                    <div class="input__field d-flex">
                                                        <label for="">Số điện thoại</label>
                                                        <input class="input__input form-control" type="tel" placeholder="Vui lòng nhập số điện thoại">
                                                    </div>
                                                    <div class="input__field d-flex">
                                                        <label for="">Chọn CV</label>
                                                        <input class="input__input" type="file">
                                                    </div>
                                                    <div class="input__field d-flex">
                                                        <label for="">Giới thiệu bản thân</label>
                                                        <textarea name="" id="" cols="100" rows="3"></textarea>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="createCV">
                                                <span>Nếu bạn chưa có CV, </span><a href="">tạo CV tại đây</a>
                                            </div>
                                            <div class=" modal-footer">
                                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-danger">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type=" button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Tạo CV Ứng Tuyển
                                </button>
                            </a>
                            <p class="text_align">4 ngày trước</p>
                            <h6>Địa điểm</h6>
                            <p>Tầng 44 - 45 Keangnam Landmark, Phường Mễ Trì, Quận Nam Từ Liêm, Thành phố Hà Nội</p>
                            <h6>Số năm kinh nghiệm</h6>
                            <p>1 năm</p>
                            <h6>Cấp bậc</h6>
                            <p>Chuyên viên</p>
                            <h6>Loại hình</h6>
                            <p class="border_type">Fulltime</p>
                            <h6>Kỹ năng</h6>
                            <div class="content__right__skill">
                                <p>CSS</p>
                                <p>Java</p>
                                <p>JavaScript</p>
                                <p>HTML</p>
                                <p>Full-Stack</p>
                                <p>Angular</p>
                                <p>React</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 col-xl-3 detail_body__right">
                <h6>Website</h6>
                <a href="#">
                    <p>https://digital.viettel.vn/</p>
                </a>
                <h6>Địa điểm</h6>
                <p>Tầng 44 - 45 Keangnam Landmark, Phường Mễ Trì, Quận Nam Từ Liêm, Thành phố Hà Nội</p>
                <h6>Quy mô công ty</h6>
                <p>500 - 999</p>
                <h6>Ngành nghề</h6>
                <p>Fintech</p>
                <h6>Các công nghệ sử dụng</h6>
                <div class="detail_body__right__skill">
                    <p>Android</p>
                    <p>iOS</p>
                    <p>Java</p>
                    <p>Sping</p>
                    <p>Microsoft</p>
                </div>
                <h6>Quốc tịch công ty</h6>
                <div class="detail_body__right__img"><img src="<?php echo e(asset('img/Vietnam.png')); ?>" alt="">
                    <p>Việt Nam</p>
                </div>
                <h6>Phúc lợi dành cho bạn</h6>
                <p><i class="bi bi-currency-dollar"></i> Mức lương thu hút nhân tài, ứng viên tự thỏa thuận khi tham
                    gia
                    phỏng vấn</p> <br>
                <p><i class="bi bi-star-fill"></i>Có cơ hội làm việc trong một tập đoàn lớn nhưng môi trường không
                    khác
                    gì StartUp</p>
            </div>
        </div>
        <div class="row" id="CV">
            <div class="col-12 col-xl-9">
                <div class="list_word">
                    <h5>Kiến Trúc Sư Giải Pháp (Solution Architect)</h5>
                    <p><i class="bi bi-currency-dollar"></i> Quận Nam Từ Liêm, Hà Nội <i class="bi bi-currency-dollar"></i> Fintech</p>
                    <a href="#" class="font-size_a">
                        <p>Đăng nhập để xem mức lương</p>
                    </a>
                    <div class="list_word__skill">
                        <p>Java</p>
                        <p>JavaScript</p>
                        <p>Solution Architect</p>
                    </div>
                    <div class="list_word__recruiment">
                        Ứng tuyển
                    </div>
                    <h5>Kiến Trúc Sư Giải Pháp (Solution Architect)</h5>
                    <p><i class="bi bi-currency-dollar"></i> Quận Nam Từ Liêm, Hà Nội <i class="bi bi-currency-dollar"></i> Fintech</p>
                    <a href="#" class="font-size_a">
                        <p>Đăng nhập để xem mức lương</p>
                    </a>
                    <div class="list_word__skill">
                        <p>Java</p>
                        <p>JavaScript</p>
                        <p>Solution Architect</p>
                    </div>
                    <div class="list_word__recruiment">
                        Ứng tuyển
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-3"></div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bạn đang ứng tuyển tại công ty TDC</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="input__field d-flex">
                            <label for="">Họ và tên</label>
                            <input class="input__input form-control" type="text" placeholder="Vui lòng nhập họ và tên">
                        </div>
                        <div class="input__field d-flex">
                            <label for="">Địa chỉ</label>
                            <input class="input__input form-control" type="text" placeholder="Vui lòng nhập địa chỉ">
                        </div>
                        <div class="input__field d-flex">
                            <label for="">Email</label>
                            <input class="input__input form-control" type="email" placeholder="Vui lòng nhập email">
                        </div>
                        <div class="input__field d-flex">
                            <label for="">Số điện thoại</label>
                            <input class="input__input form-control" type="tel"
                                placeholder="Vui lòng nhập số điện thoại">
                        </div>
                        <div class="input__field d-flex">
                            <label for="">Chọn CV</label>
                            <input class="input__input" type="file">
                        </div>
                        <div class="input__field d-flex">
                            <label for="">Giới thiệu bản thân</label>
                            <textarea name="" id="" cols="100" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="createCV">
                    <span>Nếu bạn chưa có CV, </span><a href="">tạo CV tại đây</a>
                </div>
                <div class=" modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">Save changes</button>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>;
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dthan\OneDrive\Documents\CD2\resources\views/detail_page.blade.php ENDPATH**/ ?>