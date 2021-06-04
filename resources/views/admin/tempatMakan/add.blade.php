@extends('layouts.admin')
@section('content')
<div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Tempat Makan</h3>
                <div class="card-tools">
                  <a href="/sekolah" type="button" class="btn btn-primary btn-sm btn-flat">Kembali</a>
                </div>
                <!-- /.card-tools -->
              </div>
              <form action="/tempatmakan/insert" method="POST">
              	@csrf
                 	<!-- /.card-header -->
              <div class="card-body">
                <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama</label>
                        <input name="nama" type="text" class="form-control" placeholder="Nama">
                        <div class="text-danger">
                        	@error('nama')
                        	{{ $message }}
                        	@enderror
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Alamat</label>
                        <input name="alamat" type="text" class="form-control" placeholder="Alamat">
                        <div class="text-danger">
                        	@error('alamat')
                        	{{ $message }}
                        	@enderror
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Koordinat</label>
                        <input name="koordinat" id ="koordinat" type="text" class="form-control" placeholder="Koordinat">
                        <div class="text-danger">
                        	@error('koordinat')
                        	{{ $message }}
                        	@enderror
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <label>Peta</label>
                      <div id="maps" style="height:500px;width:100%"></div>
                    </div>
                    <div class = "col-sm-4">
                      <script>
                        var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                          attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                          '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                          'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',id: 'mapbox/streets-v11'});

                      var peta2 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                        id: 'mapbox/satellite-v9'});

                      var peta3 =  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'});
                
                      var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',id: 'mapbox/dark-v10'});
                      
                      var map = L.map('maps', {
                          center: [-8.622676635119882, 115.21138185055722],
                          zoom: 15,
                          layers: [peta1]});

                      var baseMaps = {
                        "Grayscale" : peta1,
                        "Satellite" : peta2,
                        "Streets" : peta3,
                        "Dark" : peta4,
                      };

                      L.control.layers(baseMaps).addTo(map);

                      //mengambil titik koordinat
                      var curKoordinat = [-8.622676635119882, 115.21138185055722];
                      map.attributionControl.setPrefix(false);

                      var marker = new L.marker(curKoordinat,{
                        draggable: 'true',
                      });

                      map.addLayer(marker);

                      marker.on('dragend', function(event) {
                        var position = marker.getLatLng();
                        marker.setLatLng(position, {
                          draggable : 'true',
                        }).bindPopup(position).update();
                        $("#koordinat").val(position.lat + "," + position.lng).keyup();
                      });
                      
                      //mengambil titik koordinat map saat di klik
                      var posisi = document.querySelector("[name=koordinat]");
                      map.on("click", function(event) {
                        var lat = event.latlng.lat;
                        var lng = event.latlng.lng;

                        if(!marker){
                          marker = L.marker(event.latlng).addTo(map);
                        } else {
                          marker.setLatLng(event.latlng);
                        }

                        koordinat.value = lat + "," + lng;
                      });
                      </script>
                    </div>
                    <button class="btn btn-flat btn-primary btn-sm" type="submit">Simpan</button>
              </div>
                 </form>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
@endsection
