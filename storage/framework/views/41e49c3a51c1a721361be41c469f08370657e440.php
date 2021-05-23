
<?php $__env->startSection('content'); ?>
<div id="maps" style="height:500px;width:100%;"></div>

<div class="col-md-12">
<br>
<br>
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Informasi Logo</h3>

                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped text-small">
                    <thead>
                      <tr>
                        <th width="50px" class="text-center">No</th>
                        <th class="text-center">Potensi Desa</th>
                        <th class="text-center">Ikon</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no=1; ?>
                      <?php $__currentLoopData = $potensiDesa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td class="text-center"><?php echo e($no++); ?></td>
                        <td class="text-center"><?php echo e($d->nama_potensi); ?></td>
                        <td class="text-center"><img src="<?php echo e(asset('icon')); ?>/<?php echo e($d->icon); ?>" width="70px";height="70px";></td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

<script>
    var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11'});

    var peta2 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/satellite-v9'});

    var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'});

    var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/dark-v10'});


    var desa = L.layerGroup();
    
    var map = L.map('maps', {
        center: [-8.622676635119882, 115.21138185055722],
        zoom: 15,
        layers: [peta1, desa]
    });

    var baseMaps = {
        "Grayscale" : peta1,
        "Satellite" : peta2,
        "Streets" : peta3,
        "Dark" : peta4
    };

    var overlayer = {
        "Desa" : desa
    };

    L.control.layers(baseMaps, overlayer).addTo(map);

    <?php $__currentLoopData = $desa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        L.geoJSON(<?= $d->batas_desa ?>, {
            style: {
                color: 'white',
                fillColor: '<?php echo e($d->warna); ?>',
                fillOpacity: 0.7
            },
        }).addTo(desa).bindPopup("<?php echo e($d->nama_desa); ?>");

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php $__currentLoopData = $sekolah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        var iconSekolah = L.icon({
            iconUrl: '<?php echo e(asset('icon')); ?>/<?php echo e($s->icon); ?>',
            iconSize: [25, 25],
        });

        L.marker([<?= $s->koordinat ?>], {icon: iconSekolah})
        .addTo(map)
        .bindPopup('Nama sekolah : <?= $s->nama_sekolah ?> <br> Alamat : <?= $s->alamat ?> <br> Koordinat : <?= $s->koordinat ?>');
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php $__currentLoopData = $tempatmakan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        var iconTempatMakan = L.icon({
            iconUrl: '<?php echo e(asset('icon')); ?>/<?php echo e($m->icon); ?>',
            iconSize: [25, 25],
        });

        L.marker([<?= $m->koordinat ?>], {icon: iconTempatMakan}).addTo(map)
        .bindPopup('Nama: <?= $m->nama ?> <br> Alamat: <?= $m->alamat ?> <br> Koordinat: <?= $m->koordinat ?>');
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php $__currentLoopData = $tempatibadah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        var iconTempatIbadah = L.icon({
            iconUrl: '<?php echo e(asset('icon')); ?>/<?php echo e($i->icon); ?>',
            iconSize: [25, 25],
        });

        L.marker([<?= $i->koordinat ?>], {icon: iconTempatIbadah})
        .addTo(map)
        .bindPopup('Nama: <?= $i->nama_tempat_ibadah ?> <br> Alamat: <?= $i->alamat ?> <br> Koordinat: <?= $i->koordinat ?>');
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tubesSIG\resources\views/view_frontend.blade.php ENDPATH**/ ?>