@extends('layouts.admin')
@section('content')
<div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Data {{ $title }}</h3>

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
                      @foreach($sekolah as $d)
                      <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">{{ $d->nama_sekolah }}</td>
                        <td class="text-center">{{ $d->jenjang_sekolah }}</td>
                        <td class="text-center">{{ $d->jenis_sekolah }}</td>
                        <td class="text-center">{{ $d->alamat }}</td>
                        <td class="text-center">{{ $d->koordinat }}</td>
                        <td class="text-center">
                          <button class="btn btn-sm btn-flat btn-warning"><a href="/sekolah/edit/{{ $d->id_sekolah }}" ><i class="fa fa-edit"></i></a></button>
                          <button class="btn btn-sm btn-flat btn-danger"><a href="/sekolah/delete/{{ $d->id_sekolah }}" ><i class="fa fa-trash"></i></a></button>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
@endsection