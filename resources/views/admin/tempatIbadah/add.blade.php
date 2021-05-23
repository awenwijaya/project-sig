@extends('layouts.admin')
@section('content')
<div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Tempat Ibadah</h3>
                <!-- /.card-tools -->
              </div>
              <form action="/tempatibadah/insert" method="POST">
              	@csrf
                 	<!-- /.card-header -->
              <div class="card-body">
                <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Tempat Ibadah</label>
                        <input name="nama_tempat_ibadah" type="text" class="form-control" placeholder="Nama Tempat Ibadah">
                        <div class="text-danger">
                        	@error('nama_tempat_ibadah')
                        	{{ $message }}
                        	@enderror
                        </div>
                      </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Agama</label>
                        <select name="id_agama" class="form-control">
                          <option value="">---Pilih Agama---</option>
                          @foreach($agama as $j)
                            <option value="{{ $j->id }}">{{ $j->agama }}
                          @endforeach
                        </select>
                        <div class="text-danger">
                          @error('id_agama')
                          {{ $message }}
                          @enderror
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
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
                    <div class="col-sm-6">
                    <button class="btn btn-flat btn-primary btn-sm" type="submit">Simpan</button>
              </div>
                 </form>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
@endsection
