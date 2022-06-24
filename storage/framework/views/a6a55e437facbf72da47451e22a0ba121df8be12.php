

<?php $__env->startSection('content'); ?>
<div class="container" style="padding-top: 40px;min-height: 550px">
    <div class="card">
        <div class="card-body">
            <p class="card-text">
                <div class="card-title">
                    <h5>Data Pelanggan</h5>
                </div>
                <a href="<?php echo e(route('pelanggan.create')); ?>">
                    <button class="btn btn-sm btn-success">Tambah</button>
                </a>
                <p></p>
                <table class="table table-stripped">
                    <tr>
                        <th>Nama Golongan</th>
                        <th>Nama</th>
                        <th>Nomor</th>
                        <th>KTP</th>
                        <th>Seri</th>
                        <th>Meteran</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                    <?php $__currentLoopData = $pelanggan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->golongan->gol_kode); ?> - <?php echo e($item->golongan->gol_nama); ?></td>
                        <td><?php echo e($item->nama); ?></td>
                        <td><?php echo e($item->no); ?></td>
                        <td><?php echo e($item->ktp); ?></td>
                        <td><?php echo e($item->seri); ?></td>
                        <td><?php echo e($item->meteran); ?></td>
                        <td><?php echo e($item->user->email); ?></td>
                        <td>
                            <?php if($item->aktif == 0): ?>
                                <span class="badge bg-primary">
                                    Aktif
                                </span>
                            <?php else: ?>
                                <span class="badge bg-secondary">
                                    Tidak Aktif
                                </span>
                            <?php endif; ?>
                        </td>
                        <td style="width: 25%">
                        <a href="<?php echo e(route('pelanggan.edit', $item->id)); ?>">
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
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Quis_Web\tugas-umi\resources\views/apps/pelanggan/index.blade.php ENDPATH**/ ?>