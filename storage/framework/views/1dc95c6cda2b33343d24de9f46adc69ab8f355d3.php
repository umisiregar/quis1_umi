

<?php $__env->startSection('content'); ?>
<div class="container" style="padding-top: 40px; min-height: 530px">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">SELAMAT DATANG</h5>
                    <p class="card-text">
                        <div class="row">
                            <div class="col-md-3">
                                Username 
                            </div>
                            <div class="col-md-8">
                                <?php echo e(auth()->user()->nama); ?>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                Email
                            </div>
                            <div class="col-md-8">
                                <?php echo e(auth()->user()->email); ?>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                Alamat
                            </div>
                            <div class="col-md-8">
                                
                                <?php echo e(auth()->user()->alamat); ?>

                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\tugas-dini\resources\views/apps/dashboard.blade.php ENDPATH**/ ?>