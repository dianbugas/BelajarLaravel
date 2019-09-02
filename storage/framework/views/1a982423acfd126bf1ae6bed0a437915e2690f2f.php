<!-- bisa pakai titik atau sles -->


<?php $__env->startSection('title', 'Daftar Mahasiswa'); ?>

<?php $__env->startSection('container'); ?>
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Mahasiswa</h1>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/cobaLaravel/resources/views/mahasiswa/index.blade.php ENDPATH**/ ?>