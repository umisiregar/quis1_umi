

<?php $__env->startSection('content'); ?>
<div class="container" style="padding-top: 40px; min-height: 530px">
    <div class="card" style="width: 600px">
        <div class="card-body">
            <div class="card-title"><h5>Data Golongan</h5></div>
            <div class="card-text">
                <a href="<?php echo e(route('golongan.create')); ?>">
                    <button class="btn btn-sm btn-success">Tambah</button>
                </a>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($item->gol_kode); ?></td>
                            <td><?php echo e($item->gol_nama); ?></td>
                            <td style="width: 25%">
                            <a href="<?php echo e(route('golongan.edit', $item->id)); ?>">
                                <button class="btn btn-sm btn-warning">Edit</button>
                            </a>
                            <form action="<?php echo e(route('golongan')); ?>" method="POST" style="display: inline">
                                <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                <input type="text" name="id" value="<?php echo e($item->id); ?>" style="display:none">
                                <button class="btn btn-sm btn-danger" name="hapus">Hapus</button>
                            </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Quis_Web\tugas-umi\resources\views/apps/golongan/index.blade.php ENDPATH**/ ?>