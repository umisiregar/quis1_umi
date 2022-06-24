

<?php $__env->startSection('content'); ?>
<div class="container" style="padding-top: 40px; min-height: 550px">
    <div class="card" style="width: 600px">
        <div class="card-body">
            <div class="card-title"><h5>Data Golongan</h5></div>
            <p class="card-text">
            <form action="<?php echo e(route('golongan')); ?>" method="POST">
                <?php echo csrf_field(); ?> <?php echo method_field('POST'); ?>
                <input type="hidden" name="id" value="<?php echo e($golongan->id); ?>">
                <div class="form-group">
                  <label for="">Nama</label>
                  <input type="text" class="form-control" name="gol_nama" value="<?php echo e($golongan->gol_nama); ?>">
                </div>
                <div class="form-group mt-4">
                  <label for="">Kode</label>
                  <input type="text" class="form-control" name="gol_kode" value="<?php echo e($golongan->gol_kode); ?>">
                </div>
                <div class="d-flex justify-content-end mt-4">
                    <button class="btn btn-sm btn-success" name="simpan">Simpan</button>
                </div>
            </form>
            </p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\tugas-retno\resources\views/apps/golongan/edit.blade.php ENDPATH**/ ?>