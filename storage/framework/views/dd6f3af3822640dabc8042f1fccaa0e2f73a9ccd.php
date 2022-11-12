<?php $__env->startSection('footer'); ?>
    <!-- Search -->
    <div class="search container">
        <form action="<?php echo e(route('blogSearch')); ?>" method="GET">
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
                                <a href="<?php echo e(route('blogDetail', $featuredPosts->id)); ?>"><img
                                        src="<?php echo e(asset('img/blogit/' . $featuredPosts->image)); ?>"></a>
                                <h4><a href="<?php echo e(route('blogDetail', $featuredPosts->id)); ?>"><?php echo e($featuredPosts->title); ?></a>
                                </h4>
                                <div class="meta">
                                    <span>Ngày đăng: <?php echo e(date('d-m-Y', strtotime($featuredPosts->created_at))); ?></span>
                                    <span>Lượt xem: 2344 Lượt</span>
                                </div>
                            </div>
                        </div>
                        <div class="post-news">
                            <h2 class="title-news">Bài viết mới nhất</h2>
                            <div class="content-news">
                                <?php $__currentLoopData = $newPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="news-detail">
                                        <a href="<?php echo e(route('blogDetail', $row->id)); ?>"><img
                                                src="<?php echo e(asset('img/blogit/' . $row->image)); ?>" alt="Bài viết mới nhất"></a>
                                        <div class="info-post">
                                            <h4><a href="<?php echo e(route('blogDetail', $row->id)); ?>"><?php echo e($row->title); ?></a></h4>
                                            <div class="meta">
                                                <span>Ngày đăng: <?php echo e(date('d-m-Y', strtotime($row->created_at))); ?></span>
                                                <br> <span>Lượt xem: 2342
                                                    Lượt</span>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="paginator">
                                <?php echo e($newPost->links()); ?>

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
                                                <a href="<?php echo e(route('blogDetail', $row->id)); ?>"><img
                                                        src="<?php echo e(asset('img/blogit/' . $row->image)); ?>" alt=""></a>
                                                <h4><a href="<?php echo e(route('blogDetail', $row->id)); ?>"><?php echo e($row->title); ?></a>
                                                </h4>
                                                <div class="meta"><span>Ngày đăng:
                                                        <?php echo e(date('d-m-Y', strtotime($row->created_at))); ?></span><br>
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

<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dthan\OneDrive\Documents\CD2\resources\views/blogit/blogit_home.blade.php ENDPATH**/ ?>