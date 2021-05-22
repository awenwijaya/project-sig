
<?php $__env->startSection('content'); ?>
<div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Potensi Desa</h3>
                <!-- /.card-tools -->
              </div>
              <form action="/potensidesa/update/<?php echo e($potensidesa->id); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                  <!-- /.card-header -->
              <div class="card-body">
                <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Potensi Desa</label>
                        <input name="nama_potensi" type="text" class="form-control" placeholder="Nama Potensi Desa" value="<?php echo e($potensidesa->nama_potensi); ?>">
                        <div class="text-danger">
                          <?php $__errorArgs = ['nama_potensi'];
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
                      <label>Ganti Ikon</label>
                    <input name="icon" type="file" accept="image/png" class="form-control">
                  <div class="text-danger">
                      <?php $__errorArgs = ['icon'];
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
                    <button class="btn btn-flat btn-primary btn-sm" type="submit">Simpan</button>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label>Ikon Sekarang</label>
                  <img src="<?php echo e(asset('icon')); ?>/<?php echo e($potensidesa->icon); ?>" height="70px";width="70px"><
                </div>
              </div>
                 </form>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tubesSIG\resources\views/admin/potensiDesa/edit.blade.php ENDPATH**/ ?>