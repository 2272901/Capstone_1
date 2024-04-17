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
                    <div class="card-header">
                        <a href="<?php echo e(route('ctz-create')); ?>" role="button" class="btn btn-success">Tambah Penduduk</a>
                    </div>
                    <div class="card-body">
                        <table id="table-kk" class="table table-striped">
                            <thead>
                            <tr>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Detail Profil</th>
                                <th>Detail KK</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $ctzs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ctz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($ctz->nik); ?></td>
                                    <td><?php echo e($ctz->nama); ?></td>
                                    <td>
                                        <div><b>Alamat: </b><?php echo e($ctz->alamat); ?></div>
                                        <div><b>Tanggal Lahir: </b><?php echo e($ctz->tgl_lahir); ?></div>
                                        <div><b>Gol Darah: </b><?php echo e($ctz->gol_darah); ?></div>
                                        <div><b>Agama: </b><?php echo e($ctz->agama); ?></div>
                                    </td>
                                    <td><?php echo e($ctz->kartuKeluarga->no); ?> - <?php echo e($ctz->kartuKeluarga->nama_kepala); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ExtraCSS'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ExtraJS'); ?>
    <script src="<?php echo e(asset('plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
    <script>
        $('#table-kk').DataTable();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\AWP\project-03\resources\views/ctz/index.blade.php ENDPATH**/ ?>