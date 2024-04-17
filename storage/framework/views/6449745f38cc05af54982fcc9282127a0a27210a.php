<?php $__env->startSection('web-content'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Penduduk</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Penduduk</li>
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

                        <form method="post" action="<?php echo e(route('ctz-store')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label for="ctz-nik" class="col-form-label col-sm-2">NIK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="ctz-nik"
                                           placeholder="Contoh: 3171021415230005" name="nik" required autofocus
                                           maxlength="16">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ctz-nama" class="col-form-label col-sm-2">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="ctz-nama"
                                           placeholder="Contoh: John Doe" name="nama" required maxlength="100">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ctz-alamat" class="col-form-label col-sm-2">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="ctz-alamat" name="alamat" placeholder="Contoh: Jl Asia Afrika No. 12" maxlength="300"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ctz-tgl" class="col-form-label col-sm-2">Tanggal Lahir</label>
                                <div class="col-sm-4">
                                    <input type="date" id="ctz-tgl" name="tgl_lahir" required class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ctz-agama" class="col-form-label col-sm-2">Agama</label>
                                <div class="col-sm-4">
                                    <select id="ctz-agama" name="agama" required class="form-control">
                                        <option value="Budha">Budha</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Kong Hu Cu">Kong Hu Cu</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ctz-goldar" class="col-form-label col-sm-2">Golongan Darah</label>
                                <div class="col-sm-4">
                                    <select id="ctz-goldar" name="gol_darah" required class="form-control">
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="O">O</option>
                                        <option value="AB">AB</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ctz-kk" class="col-form-label col-sm-2">Nomor KK</label>
                                <div class="col-sm-8">
                                    <select id="ctz-kk" name="kartu_keluarga_no" required class="form-control select2">
                                        <?php $__currentLoopData = $kks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($kk->no); ?>"><?php echo e($kk->no); ?> - <?php echo e($kk->nama_kepala); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
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
    <link rel="stylesheet" href="<?php echo e(asset('plugins/select2/css/select2.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ExtraJS'); ?>
    <script src="<?php echo e(asset('plugins/select2/js/select2.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')); ?>"></script>
    <script>
        $('#ctz-kk').select2();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\AWP\project-03\resources\views/ctz/create.blade.php ENDPATH**/ ?>