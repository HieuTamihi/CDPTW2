<div class="sidebar">
    <div class="widget ">
        <h3>Bài viết xem nhiều</h3> <br>
        <?php $__currentLoopData = $viewMore; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="content-new">
            <ul>
                <li>
                    <a href="#"><img src="<?php echo e(asset('img/blogit/' . $row->image)); ?>" alt=""></a>
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
<?php /**PATH D:\OneDrive\Documents\CD2\resources\views/blogit_sidebar.blade.php ENDPATH**/ ?>