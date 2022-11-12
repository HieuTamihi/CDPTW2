
<?php $__env->startSection('footer'); ?>
<div class="log__reg__page">
    <div class="container">
        <div class="row">
            <div class="page__log">
                <div class="title__log">
                    <h4>Welcome to...</h4>
                </div>
                <div class="introduce__log">
                    <p>Register / login now to discover IT jobs, outstanding
                        technology information and opportunities to receive
                        attractive gifts</p>
                </div>
                <?php if(Session()->get('message')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo e(Session()->get('message')); ?>

                </div>
                <?php endif; ?>
                <div class="form__log">
                    <div class="name__log">
                        <h4>LOGIN</h4>
                    </div>
                    <form action="<?php echo e(route('login')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="text" placeholder="Email" class="email__log" name="email" value="<?php echo e(old('email')); ?>">
                        <?php if($errors->has('email')): ?>
                        <strong class="text-danger"><?php echo e($errors->first('email')); ?></strong>
                        <?php endif; ?>
                        <input type="password" placeholder="Password" class="pass__log" name="password">
                        <?php if($errors->has('password')): ?>
                        <strong class="text-danger"><?php echo e($errors->first('password')); ?></strong>
                        <?php endif; ?>
                        <input type="submit" value="Login" class="btn login__btn">
                        <span class="btn btn reg__btn"><a href="<?php echo e(route('register')); ?>" style="text-decoration: none;color:white;">Sign up</a></span>
                    </form>
                    <a href="#" class="link__forgot">Forgot password</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<?php $__env->stopSection(); ?>;
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OneDrive\Documents\CD2\resources\views/login.blade.php ENDPATH**/ ?>