<?php $__env->startSection('web-content'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Kartu Keluarga</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Kartu Keluarga</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="card p-4">
                    <div class="card-body">

                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <?php echo e(implode('', $errors->all(':message'))); ?>

                            </div>
                        <?php endif; ?>

                        <form method="post" action="<?php echo e(route('kk-store')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="no-kk">Nomor Kartu Keluarga</label>
                                <input type="text" class="form-control" id="no-kk"
                                       placeholder="Contoh: 3171021415230005" name="no" required autofocus
                                       maxlength="16">
                            </div>
                            <div class="form-group">
                                <label for="nama-kk">Nama Kepala Keluarga</label>
                                <input type="text" class="form-control" id="nama-kk" placeholder="Contoh: John Doe"
                                       required name="nama_kepala" maxlength="100">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ExtraCSS'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('ExtraJS'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\AWP\project-03\resources\views/kk/create.blade.php ENDPATH**/ ?>