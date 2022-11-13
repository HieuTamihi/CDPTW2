<?php $__env->startSection('footer'); ?>
    <div class="form__createcv">
        <div class="container">
            <p class="attention">Hướng dẫn <br>
                - Các trường thông tin có dấu (*) là trường thông tin quan trọng bắt buộc, giúp Nhà tuyển dụng đánh giá ứng
                viên. <br>
                - Chọn Xem trước để xem các mẫu CV của bạn, chọn Mẫu và Lưu CV. Bạn cũng có thể tải xuống CV dưới dạng PDF.
            </p>
            <form action="">
                <p class="title">Thông tin cá nhân</p>
                <div class="resume_form">
                    <div class="input__field"> <label for="">Ảnh 3x4 (*)</label>
                        <input class="input__input" type="file">
                    </div>
                    <div class="input__field">
                        <label for="">Họ và tên (*)</label>
                        <input class="input__input" type="text" placeholder="Vui lòng nhập họ và tên">
                    </div>
                    <div class="input__field"> <label for="">Vị trí ứng tuyển (*)</label>
                        <input class="input__input" type="text" placeholder="Vui lòng chọn vị trí ứng tuyển">
                    </div>

                    <div class="input__field"> <label for="">Email (*)</label>
                        <input class="input__input" type="email" placeholder="Vui lòng nhập email">
                    </div>

                    <div class="input__field"> <label for="">Số điện thoại (*)</label>
                        <input class="input__input" type="tel" placeholder="Vui lòng nhập số điện thoại">
                    </div>

                    <div class="input__field">
                        <label for="">Ngày sinh (*)</label>
                        <input class="input__input" type="datetime" placeholder="dd/MM/yyyy">
                    </div>
                    <p class="title">Giới thiệu bản thân</p>
                    <div class="input__field">
                        <label for="">Giới thiệu bản thân</label>
                        <textarea name="" id="" cols="42" rows="3"></textarea>
                    </div>
                    <div class="input__field">
                        <label for="">Kinh nghiệm làm việc</label>
                        <textarea name="" id="" cols="42" rows="3"></textarea>
                    </div>


                    <p class="title">Học vấn</p>
                    <div class="input__field"> <label for="">Tên trường theo học (*)</label>
                        <input class="input__input" type="text" placeholder="Vui lòng chọn trường theo học">
                    </div>
                    <div class="input__field"> <label for="">Thời gian học tập (*)</label>
                        <input class="input__input" type="text" placeholder="MM/yyyy - MM/yyyy">
                    </div>
                    <div class="input__field"> <label for="">Ngành học (*)</label>
                        <input class="input__input" type="text" placeholder="Vui lòng chọn ngành học">
                    </div>
                    <div class="input__field">
                        <label for="">Thông tin khác</label>
                        <textarea name="" id="" cols="42" rows="3"></textarea>
                    </div>
                    <div class="input__button">
                        <input type="submit" class="btn btn-outline-danger" value="XEM TRƯỚC">
                        <input type="submit" class="btn btn-danger" value="LƯU CV">

                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Button trigger modal -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dthan\OneDrive\Documents\CD2\resources\views/createCV.blade.php ENDPATH**/ ?>