

<?php $__env->startSection('content'); ?>
<div class="container" style="padding-top: 40px; padding-bottom:40px; min-height: 600px">
    <div class="card">
        <div class="card-body">
            <p class="card-text">
                <div class="card-title"><h5>Data Pengguna</h5></div>
                <a href="<?php echo e(route('pengguna.create')); ?>">
                    <button class="btn btn-sm btn-success">Tambah</button>
                </a>
                <p></p>
                <table class="table table-striped">
                    <tr>
                        <th>Email</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>No Pos</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->email); ?></td>
                        <td><?php echo e($item->nama); ?></td>
                        <td><?php echo e($item->alamat); ?></td>
                        <td><?php echo e($item->hp); ?></td>
                        <td><?php echo e($item->pos); ?></td>
                        <td>
                            <?php if($item->role == 0): ?> 
                                <span class="badge bg-primary">
                                    Admin
                                </span>
                            <?php else: ?>
                                <span class="badge bg-secondary">
                                    Pelanggan
                                </span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if($item->user_aktif == 0): ?> 
                                <span class="badge bg-secondary">
                                    Tidak Aktif
                                </span>
                            <?php else: ?>
                                <span class="badge bg-secondary">
                                    Aktif
                                </span>
                            <?php endif; ?>
                        </td>
                        <td style="width: 25%">
                            <a href="<?php echo e(route('pengguna.edit', $item->id)); ?>">
                                <button class="btn btn-sm btn-warning">Edit</button>
                            </a>
                            <form method="POST" style="display: inline">
                                <input type="text" name="id" value="<?php echo e($item->id); ?>" style="display:none">
                                <button class="btn btn-sm btn-danger" name="hapus">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\tugas-umi\resources\views/apps/pengguna/index.blade.php ENDPATH**/ ?>