@extends('layouts.admin')
@section('content')
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
              	@csrf
                 	<!-- /.card-header -->
              <div class="card-body">
                <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Desa</label>
                        <input name="nama_desa" type="text" class="form-control" placeholder="Nama Desa">
                        <div class="text-danger">
                        	@error('nama_desa')
                        	{{ $message }}
                        	@enderror
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
                    	@error('warna')
                    	{{ $message }}
                    	@enderror
                    </div>
                    </div>
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Batas Desa</label>
                        <textarea name="batas_desa" cols="30" rows="10" class="form-control" placeholder="Batas Desa"></textarea>
                        <div class="text-danger">
                        	@error('batas_desa')
                        	{{ $message }}
                        	@enderror
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
@endsection
