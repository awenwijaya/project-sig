@extends('layouts.admin')
@section('content')
<div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Potensi Desa</h3>
                <!-- /.card-tools -->
              </div>
              <form action="/potensidesa/update/{{ $potensidesa->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                  <!-- /.card-header -->
              <div class="card-body">
                <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Potensi Desa</label>
                        <input name="nama_potensi" type="text" class="form-control" placeholder="Nama Potensi Desa" value="{{ $potensidesa->nama_potensi }}">
                        <div class="text-danger">
                          @error('nama_potensi')
                          {{ $message }}
                          @enderror
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <label>Ganti Ikon</label>
                    <input name="icon" type="file" accept="image/png" class="form-control">
                  <div class="text-danger">
                      @error('icon')
                      {{ $message }}
                      @enderror
                    </div>
                    <button class="btn btn-flat btn-primary btn-sm" type="submit">Simpan</button>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label>Ikon Sekarang</label>
                  <img src="{{ asset('icon') }}/{{ $potensidesa->icon }}" height="70px";width="70px"><
                </div>
              </div>
                 </form>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
@endsection
