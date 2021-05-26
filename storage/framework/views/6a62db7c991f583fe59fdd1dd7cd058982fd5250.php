
<?php $__env->startSection('content'); ?>
<div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Data <?php echo e($title); ?></h3>

                <div class="card-tools">
                  <a href="/sekolah/add" type="button" class="btn btn-primary btn-sm btn-flat">Tambah Sekolah</a>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-small">
                    <thead>
                      <tr>
                        <th width="50px" class="text-center">No</th>
                        <th class="text-center">Nama Sekolah</th>
                        <th class="text-center">Tingkat Sekolah</th>
                        <th class="text-center">Jenis Sekolah</th>
                        <th class="text-center">Alamat</th>
                        <th class="text-center">Koordinat</th>
                        <th class="text-center" width="80px">Tindakan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no=1; ?>
                      <?php $__currentLoopData = $sekolah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td class="text-center"><?php echo e($no++); ?></td>
                        <td class="text-center"><?php echo e($d->nama_sekolah); ?></td>
                        <td class="text-center"><?php echo e($d->jenjang_sekolah); ?></td>
                        <td class="text-center"><?php echo e($d->jenis_sekolah); ?></td>
                        <td class="text-center"><?php echo e($d->alamat); ?></td>
                        <td class="text-center"><?php echo e($d->koordinat); ?></td>
                        <td class="text-center">
                          <button class="btn btn-sm btn-flat btn-warning"><a href="/sekolah/edit/<?php echo e($d->id_sekolah); ?>" ><i class="fa fa-edit"></i></a></button>
                          <button class="btn btn-sm btn-flat btn-danger"><a href="/sekolah/delete/<?php echo e($d->id_sekolah); ?>" ><i class="fa fa-trash"></i></a></button>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tubesSIG\resources\views/admin/sekolah/index.blade.php ENDPATH**/ ?>