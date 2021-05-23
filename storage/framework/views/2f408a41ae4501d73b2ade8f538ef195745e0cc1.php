
<?php $__env->startSection('content'); ?>
<div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Tempat Makan</h3>
                <!-- /.card-tools -->
              </div>
              <form action="/tempatmakan/update/<?php echo e($tempatmakan->id); ?>" method="POST">
              	<?php echo csrf_field(); ?>
                 	<!-- /.card-header -->
              <div class="card-body">
                <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama</label>
                        <input name="nama" type="text" class="form-control" placeholder="Nama" value="<?php echo e($tempatmakan->nama); ?>">
                        <div class="text-danger">
                        	<?php $__errorArgs = ['nama'];
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
                      <div class="form-group">
                        <label>ID Potensi</label>
                        <input name="id_potensi" type="text" class="form-control" placeholder="ID Potensi" value="<?php echo e($tempatmakan->id_potensi); ?>">
                        <div class="text-danger">
                        	<?php $__errorArgs = ['id_potensi'];
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
                      <div class="form-group">
                        <label>Alamat</label>
                        <input name="alamat" type="text" class="form-control" placeholder="Alamat" value="<?php echo e($tempatmakan->alamat); ?>">
                        <div class="text-danger">
                        	<?php $__errorArgs = ['alamat'];
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
                      <div class="form-group">
                        <label>Koordinat</label>
                        <input name="koordinat" type="text" class="form-control" placeholder="Koordinat" value="<?php echo e($tempatmakan->koordinat); ?>">
                        <div class="text-danger">
                        	<?php $__errorArgs = ['koordinat'];
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
                 <button class="btn btn-flat btn-primary btn-sm" href="/desa">Batal</button>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tubesSIG\resources\views/admin/tempatMakan/edit.blade.php ENDPATH**/ ?>