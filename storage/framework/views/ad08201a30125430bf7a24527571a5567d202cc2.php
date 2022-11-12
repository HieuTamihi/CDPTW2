<?php $__env->startSection('footer'); ?>
    <!-- Search -->
    <div class="search container">
        <form action="<?php echo e(route('blogSearch')); ?>" method="GET">
            <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
            <input type="text" class="search__input form-control" name="keyword" placeholder="Nhập từ khoá tìm kiếm">
            <button type="submit" class="search__btn btn btn-danger">Tìm kiếm</button>
        </form>
    </div>

    <?php if(count($blogSearch) == '0'): ?>
        <div style="font-size: 20px; text-align:center">
            <span>OOPS!
                Hiện tại chúng tôi không thể tìm thấy <strong><?php echo e($request->keyword); ?></strong> mà bạn đang yêu
                cầu.

            </span>
            <ul>
                <li>Kiểm tra lỗi chính tả của từ khóa đã nhập</li>
                <li>Thử lại bằng từ khóa khác</li>
                <li>Thử lại bằng những từ khóa ngắn gọn hơn</li>
            </ul>
        </div>
    <?php else: ?>
        <div class="content-news">
            <?php $__currentLoopData = $blogSearch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="news-detail">
                    <a href="#"><img src="<?php echo e(asset('img/blogit/' . $row->image)); ?>" alt="Bài viết mới nhất"></a>
                    <div class="info-post">
                        <h4><a href="#"><?php echo e($row->title); ?></a></h4>
                        <div class="meta">
                            <span>Ngày đăng: <?php echo e($row->created_at); ?></span> <br> <span>Lượt xem: 2342
                                Lượt</span>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dthan\OneDrive\Documents\CD2\resources\views/blogit_search.blade.php ENDPATH**/ ?>