

<?php $__env->startSection('content'); ?>
<div class="container" style="padding-top: 40px; padding-bottom: 40px">
    <div class="card" style="width: 600px">
        <div class="card-body">
            <p class="card-text">
                <div class="card-title"><h5>Data Pengguna</h5></div>
                <form action="<?php echo e(route('pengguna')); ?>" method="POST">
                    <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
                    <input type="hidden" name="id" value="<?php echo e($user->id); ?>">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" value="<?php echo e($user->email); ?>">
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo e($user->nama); ?>">
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="<?php echo e($user->alamat); ?>">
                    </div>
                    <div class="form-group mt-2">
                        <label for="">No. Pos</label>
                        <input type="text" class="form-control" name="pos" value="<?php echo e($user->pos); ?>">
                    </div>
                    <div class="form-group mt-2">
                        <label for="">No. HP</label>
                        <input type="text" class="form-control" name="hp" value="<?php echo e($user->hp); ?>">
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Status</label>
                        <select name="aktif" class="form-control" value="<?php echo e($user->status); ?>">
                            <option value="">-Silahkan Pilih-</option>
                            <option value="1"
                            <?php if($user->aktif == 0): ?>
                                selected
                            <?php endif; ?>
                            >Aktif</option>
                            <option value="0"
                            <?php if($user->aktif == 1): ?>
                                selected
                            <?php endif; ?>
                            >Tidak Aktif</option>
                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <label for="">User Role</label>
                        <select name="role" class="form-control" value="<?php echo e($user->role); ?>">
                            <option value="">-Silahkan Pilih-</option>
                            <option value="1"
                            <?php if($user->role == 1): ?>
                                selected
                            <?php endif; ?>
                            >Admin</option>
                            <option value="0"
                            <?php if($user->role == 0): ?>
                                selected
                            <?php endif; ?>
                            >Pelanggan</option>
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
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Quis_Web\tugas-umi\resources\views/apps/pengguna/edit.blade.php ENDPATH**/ ?>