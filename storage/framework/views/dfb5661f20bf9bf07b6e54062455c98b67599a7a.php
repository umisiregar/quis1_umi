

<?php $__env->startSection('content'); ?>
<div class="container" style="padding-top: 40px; padding-bottom: 40px; min-height: 600px">
    <div class="card" style="width: 600px">
        <div class="card-body">
        <div class="card-title"><h5>Data Pelanggan</h5></div>
        <p class="card-text">
            <form action="<?php echo e(route('pelanggan')); ?>" method="POST">
                <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
                <input type="hidden" name="id" value="<?php echo e($pelanggan->id); ?>">
                <div class="form-group mt-2">
                    <label for="">Golongan</label>
                    <select name="golongan_id" class="form-control" id="">
                        <option value="">-Silahkan Pilih-</option>
                        <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"
                            <?php if($item->id == $pelanggan->golongan_id): ?> 
                                selected
                            <?php endif; ?>
                        >
                            <?php echo e($item->gol_kode); ?> - <?php echo e($item->gol_nama); ?>

                        </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group mt-2">
                    <label for="">User</label>
                    <select name="user_id" class="form-control">
                        <option value="">-Silahkan Pilih-</option>
                        <?php $__currentLoopData = $pengguna; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"
                            <?php if($item->id == $pelanggan->user_id): ?> 
                                selected
                            <?php endif; ?>
                        >
                            <?php echo e($item->email); ?> - <?php echo e($item->nama); ?>

                        </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group mt-2">
                    <label for="">No Pelanggan</label>
                    <input type="text" name="no" class="form-control" value="<?php echo e($pelanggan->no); ?>">
                </div>
                <div class="form-group mt-2">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?php echo e($pelanggan->nama); ?>">
                </div>
                <div class="form-group mt-2">
                    <label for="">KTP</label>
                    <input type="number" name="ktp" class="form-control" value="<?php echo e($pelanggan->ktp); ?>">
                </div>
                <div class="form-group mt-2">
                    <label for="">Seri</label>
                    <input type="text" name="seri" class="form-control" value="<?php echo e($pelanggan->seri); ?>">
                </div>
                <div class="form-group mt-2">
                    <label for="">Meteran</label>
                    <input type="text" name="meteran" class="form-control" value="<?php echo e($pelanggan->meteran); ?>">
                </div>
                <div class="form-group mt-2">
                    <label for="">Status</label>
                    <select name="aktif" class="form-control">
                        <option value="">-Silahkan Pilih-</option>
                        <option value="1"
                        <?php if($pelanggan->aktif == 1): ?>
                            selected
                        <?php endif; ?>
                        >Aktif</option>
                        <option value="0"
                        <?php if($pelanggan->aktif == 0): ?>
                            selected
                        <?php endif; ?>
                        >Tidak Aktif</option>
                    </select>
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
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\tugas-retno\resources\views/apps/pelanggan/edit.blade.php ENDPATH**/ ?>