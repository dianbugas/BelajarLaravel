<?php $__env->startSection('title', 'Daftar Beastudi'); ?>
    
<?php $__env->startSection('container'); ?>
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-2">Daftar Students</h1>
            <a href="/students/create" class="btn btn-primary my-3">Tambah Data</a>

            <ul class="list-group">
                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $std): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo e($std->nama); ?>

                <a href="/students/<?php echo e($std->id); ?>" class="badge badge-info">detail</a>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
        </div>
    </div>
</div>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/mahasiswa/resources/views/students/index.blade.php ENDPATH**/ ?>