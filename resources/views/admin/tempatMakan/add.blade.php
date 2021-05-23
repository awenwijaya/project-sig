@extends('layouts.admin')
@section('content')
<div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Tempat Makan</h3>
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
                        <input name="koordinat" type="text" class="form-control" placeholder="Koordinat">
                        <div class="text-danger">
                        	@error('koordinat')
                        	{{ $message }}
                        	@enderror
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
@endsection
