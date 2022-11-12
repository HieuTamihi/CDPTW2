<?php $__env->startSection('main'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Posts</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Layout</a></li>
                            <li class="breadcrumb-item active">Fixed Layout</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <form action="<?php echo e(route('blog-add.store')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="mb-3">
                                        <label for="inputName">Title</label>
                                        <input type="text" id="inputName" class="form-control" value=""
                                            name="name" placeholder="Tiêu đề" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Image</label>
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="inputName">Content</label>
                                            <textarea id="inputName" class="form-control" value="" name="name" required rows="4" cols="50"
                                                placeholder="Nội dung"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <a href="" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-success float-right">Add</button>
                        </div>
                    </div>
            </form>
        </section>
        <br>
        <section class="content">
    </div>
    </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('DashboardTemplate.dashboardHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dthan\OneDrive\Documents\CD2\resources\views/DashboardTemplate/dashboard_blog_add.blade.php ENDPATH**/ ?>