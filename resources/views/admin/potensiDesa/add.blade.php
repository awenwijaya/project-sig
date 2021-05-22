@extends('layouts.admin')
@section('content')
<div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Potensi Desa</h3>
                <!-- /.card-tools -->
              </div>
              <form action="/potensidesa/insert" method="POST" enctype="multipart/form-data">
              	@csrf
                 	<!-- /.card-header -->
              <div class="card-body">
                <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Potensi Desa</label>
                        <input name="nama_potensi" type="text" class="form-control" placeholder="Nama Desa">
                        <div class="text-danger">
                        	@error('nama_potensi')
                        	{{ $message }}
                        	@enderror
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <label>Ikon</label>
                    <input name="icon" type="file" accept="image/png" class="form-control">
                  <div class="text-danger">
                    	@error('icon')
                    	{{ $message }}
                    	@enderror
                    </div>
                    <button class="btn btn-flat btn-primary btn-sm" type="submit">Simpan</button>
              </div>
                 </form>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
@endsection
