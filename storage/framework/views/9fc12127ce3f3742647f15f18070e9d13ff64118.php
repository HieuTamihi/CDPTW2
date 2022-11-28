<?php $__env->startSection('main'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        
        <br>
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Posts home</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0" style="overflow-x: auto;">
                    <table class="table table-striped projects modify-table">
                        <thead>
                            <tr>
                                <th style="width:1%">ID</th>
                                <th style="width:18%">Title</th>
                                <th style="width:70%">Contents</th>
                                <th style="width:5%">Image</th>
                                <th style="width:2%">Views</th>
                                <th style="width:4%">Created_at</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $resultPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <td><?php echo e($result->id); ?></td>
                                <td><?php echo e($result->title); ?></td>
                                <td><?php echo e($result->content); ?></td>
                                <td><?php echo e($result->image); ?></td>
                                <td><?php echo e($result->views); ?></td>
                                <td> <?php echo e(date('d-m-Y', strtotime($result->created_at))); ?></td>
                                <td class="project-actions text-left">
                                    <form method="POST" action="#">
                                        <a class="btn btn-info btn-sm modify-icon" href="#">
                                            <i class="fas fa-pencil-alt ">
                                            </i>
                                            Edit
                                        </a>
                                        <button type="submit" class="btn btn-danger btn-sm modify-icon">
                                            <i class="fas fa-trash ">
                                            </i>
                                            Delete
                                        </button>
                                    </form>
                                </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>

                </div>

                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div>
                <?php echo e($resultPosts->links()); ?>

            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('DashboardTemplate.dashboardHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OneDrive\Documents\CD2\resources\views/DashboardTemplate/dashboard_blog_home.blade.php ENDPATH**/ ?>