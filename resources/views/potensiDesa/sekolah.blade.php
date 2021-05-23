@extends('layouts.frontend')
@section('content')
<div id="maps" style="height:500px;width:100%;"></div>

<div class="col-md-12">
<br>
<br>
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Informasi Sekolah</h3>

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
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no=1; ?>
                      @foreach($sekolah as $d)
                      <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">{{ $d->nama_sekolah }}</td>
                        <td class="text-center">{{ $d->jenjang_sekolah }}</td>
                        <td class="text-center">{{ $d->jenis_sekolah }}</td>
                        <td class="text-center">{{ $d->alamat }}</td>
                        <td class="text-center">{{ $d->koordinat }}</td>
                      </tr>
                      @endforeach
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

    @foreach($desa as $d)
        L.geoJSON(<?= $d->batas_desa ?>, {
            style: {
                color: 'white',
                fillColor: '{{ $d->warna }}',
                fillOpacity: 0.7
            },
        }).addTo(desa).bindPopup("{{ $d->nama_desa }}");

    @endforeach

    @foreach($sekolah as $s)
        var iconSekolah = L.icon({
            iconUrl: '{{ asset('icon') }}/{{ $s->icon }}',
            iconSize: [25, 25],
        });

        L.marker([<?= $s->koordinat ?>], {icon: iconSekolah})
        .addTo(map)
        .bindPopup('Nama sekolah : <?= $s->nama_sekolah ?> <br> Alamat : <?= $s->alamat ?> <br> Koordinat : <?= $s->koordinat ?>');;
    @endforeach

</script>
@endsection
