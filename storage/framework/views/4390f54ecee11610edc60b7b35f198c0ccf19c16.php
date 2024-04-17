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
                    <?php if(\Illuminate\Support\Facades\Session::has('msg')): ?>
                        <div class="alert alert-danger"><?php echo e(Session::get('msg')); ?>

                        </div>
                    <?php endif; ?>

                    <div class="card-header">
                        <a href="<?php echo e(route('kk-create')); ?>" role="button" class="btn btn-success">Tambah Kartu Keluarga</a>
                    </div>
                    <div class="card-body">
                        <table id="table-kk" class="table table-striped">
                            <thead>
                            <tr>
                                <th>Nomor KK</th>
                                <th>Nama Kepala Keluarga</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $kks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($kk->no); ?></td>
                                    <td><?php echo e($kk->nama_kepala); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('kk-edit', ['kartuKeluarga' => $kk->no])); ?>" class="btn btn-warning" role="button"><i class="fas fa-edit"></i></a>
                                        <a href="<?php echo e(route('kk-delete', ['kartuKeluarga' => $kk->no])); ?>" class="btn btn-danger del-button" role="button"><i class="fas fa-trash"></i></a>
                                    </td>
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
    <link rel="stylesheet" href="<?php echo e(asset('plugins/sweetalert2/sweetalert2.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ExtraJS'); ?>
    <script src="<?php echo e(asset('plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
    <script>
        $('#table-kk').DataTable();

        $('.del-button').on('click', function (e) {
            e.preventDefault();
            Swal.fire({
                title: "Are you sure want to delete?",
                showCancelButton: true,
            }).then((result) => {
                if(result.isConfirmed) {
                    window.location = this.href;
                }
            })
        })
    </script>
    <script src="<?php echo e(asset('plugins/sweetalert2/sweetalert2.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\AWP\project-03\resources\views/kk/index.blade.php ENDPATH**/ ?>