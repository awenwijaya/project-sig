<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sistem Informasi Geografis</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('LandingPage') }}/css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Sistem Informasi Geografis</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#potential">Potential</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Maps</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Admin</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Sistem Informasi Geografis Peguyangan</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#potential">Show Me The Village Potential</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="potential">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Village Potential</h2>
                    <h3 class="section-subheading text-muted">Click one of these buttons to view the locations of each potentials</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fas fa-graduation-cap fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Schools</h4>
                        <a href="/potensisekolah">More Details</a>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fas fa-praying-hands fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Worship Place</h4>
                        <a href="/potensitempatibadah">More Details</a>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fas fa-hamburger fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Restaurants</h4>
                        <a href="/potensitempatmakan">More Details</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Maps</h2>
                </div>
                <div class="content">
                    <div class="container">
                        <div id="maps" style="height:500px;width:100%"></div>
                        <div class="col-md-12">
                            <br>
                            <br>
                            <div class="card card-outline card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Informasi Logo</h3>
                                </div>
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
                                        @foreach($potensiDesa as $d)
                                        <tr>
                                            <td class="text-center">{{ $no++ }}</td>
                                            <td class="text-center">{{ $d->nama_potensi }}</td>
                                            <td class="text-center"><img src="{{ asset('icon') }}/{{ $d->icon }}" width="70px";height="70px";></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
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

                var peta3 =  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'});
                
                var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',id: 'mapbox/dark-v10'});

                    var desa = L.layerGroup();
    
                var map = L.map('maps', {
                    center: [-8.622676635119882, 115.21138185055722],
                    zoom: 15,
                    layers: [peta1, desa]});
                    
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
                    .bindPopup('Nama sekolah : <?= $s->nama_sekolah ?> <br> Alamat : <?= $s->alamat ?> <br> Koordinat : <?= $s->koordinat ?>');
                @endforeach

                @foreach($tempatmakan as $m)
                    var iconTempatMakan = L.icon({
                        iconUrl: '{{ asset('icon') }}/{{ $m->icon }}',
                        iconSize: [25, 25],
                    });

                    L.marker([<?= $m->koordinat ?>], {icon: iconTempatMakan}).addTo(map)
                    .bindPopup('Nama: <?= $m->nama ?> <br> Alamat: <?= $m->alamat ?> <br> Koordinat: <?= $m->koordinat ?>');
                @endforeach

                @foreach($tempatibadah as $i)
                    var iconTempatIbadah = L.icon({
                        iconUrl: '{{ asset('icon') }}/{{ $i->icon }}',
                        iconSize: [25, 25],
                    });

                    L.marker([<?= $i->koordinat ?>], {icon: iconTempatIbadah})
                    .addTo(map)
                    .bindPopup('Nama: <?= $i->nama_tempat_ibadah ?> <br> Alamat: <?= $i->alamat ?> <br> Koordinat: <?= $i->koordinat ?>');
                @endforeach
            </script>
        </section>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('LandingPage') }}/js/scripts.js"></script>
    </body>
</html>
