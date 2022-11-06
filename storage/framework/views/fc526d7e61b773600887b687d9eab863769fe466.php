<?php $__env->startSection('footer'); ?>
    <!-- Search -->
    <div class="search container">
        <form action="<?php echo e(route('search')); ?>" method="GET">
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
                                <h4><a href="#"><?php echo e($postDetail->title); ?></a></h4> <br>
                                <a href="#"><img src="<?php echo e(asset('img/blogit/' . $postDetail->image)); ?>"
                                        alt="Bai viet noi bat"></a>
                                <p><?php echo e($postDetail->content); ?></p>

                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <div class="sidebar">
                            <div class="widget ">
                                <h3>Bài viết xem nhiều</h3> <br>
                                <?php $__currentLoopData = $viewMore; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="content-new">
                                        <ul>
                                            <li>
                                                <a href="#"><img src="<?php echo e(asset('img/blogit/' . $row->image)); ?>"
                                                        alt=""></a>
                                                <h4><a href="#"><?php echo e($row->title); ?></a></h4>
                                                <div class="meta"><span>Ngày đăng:<?php echo e($row->created_at); ?></span><br>
                                                    <span>Lượt xem: <?php echo e($row->views); ?>

                                                        Lượt</span>
                                                </div>
                                                <div class="clear"></div>
                                            </li>

                                        </ul>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?> "></script>
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OneDrive\Documents\CD2\resources\views/blogit_details.blade.php ENDPATH**/ ?>