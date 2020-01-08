<?php $__env->startSection('title', 'From Tambah Data Students'); ?>
    
<?php $__env->startSection('container'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-2">From Tambah Data Students</h1>
            <form>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama">
                </div>
                <div class="form-group">
                    <label for="nrp">Nrp</label>
                    <input type="text" class="form-control" id="nrp" placeholder="NRP" name="nrp">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                    <label for="jurursan">Jurursan</label>
                    <input type="text" class="form-control" id="jurursan" placeholder="Jurursan" name="jurusan">
                </div>
            </form>
        </div>
    </div>
</div>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/mahasiswa/resources/views/students/create.blade.php ENDPATH**/ ?>