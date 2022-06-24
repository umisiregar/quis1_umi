<?php $__env->startSection('content'); ?>
<div class="box-login">
    <img src="<?php echo e(asset('img/logo-uinsu.png')); ?>" class="logo" alt="" srcset="">
    <div style="padding-top: 20px;">Login</div>
    <form method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?> <?php echo method_field('POST'); ?>
        <input type="text" placeholder="Email" name="email">
        <input type="password" placeholder="Password" name="password">
        <button name="submit">Login</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\tugas-retno\resources\views/auth/login.blade.php ENDPATH**/ ?>