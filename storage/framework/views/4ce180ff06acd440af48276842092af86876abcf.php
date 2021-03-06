
<?php $__env->startSection('content'); ?>
<div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Desa</h3>
                <div class="card-tools">
                  <a href="/desa" type="button" class="btn btn-primary btn-sm btn-flat">Kembali</a>
                </div>
                <!-- /.card-tools -->
              </div>
              <form action="/desa/insert" method="POST">
              	<?php echo csrf_field(); ?>
                 	<!-- /.card-header -->
              <div class="card-body">
                <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Desa</label>
                        <input name="nama_desa" type="text" class="form-control" placeholder="Nama Desa">
                        <div class="text-danger">
                        	<?php $__errorArgs = ['nama_desa'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        	<?php echo e($message); ?>

                        	<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <label>Warna</label>
                  <div class="input-group my-colorpicker2">
                    <input name="warna" type="text" class="form-control" placeholder="Warna">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fas fa-square"></i></span>
                    </div>
                  </div>
                  <div class="text-danger">
                    	<?php $__errorArgs = ['warna'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    	<?php echo e($message); ?>

                    	<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    </div>
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Batas Desa</label>
                        <textarea name="batas_desa" cols="30" rows="10" class="form-control" placeholder="Batas Desa"></textarea>
                        <div class="text-danger">
                        	<?php $__errorArgs = ['batas_desa'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        	<?php echo e($message); ?>

                        	<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                      </div>
                    </div>
                    <button class="btn btn-flat btn-primary btn-sm" type="submit">Simpan</button>
              </div>
                 </form>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tubesSIG\resources\views/admin/desa/tambah.blade.php ENDPATH**/ ?>