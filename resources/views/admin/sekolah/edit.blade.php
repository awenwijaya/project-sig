@extends('layouts.admin')
@section('content')
<div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Sekolah</h3>
                <!-- /.card-tools -->
              </div>
              <form action="/sekolah/update/{{ $sekolah->id }}" method="POST">
                @csrf
                  <!-- /.card-header -->
              <div class="card-body">
                <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Sekolah</label>
                        <input name="nama_sekolah" type="text" class="form-control" placeholder="Nama Sekolah" value="{{ $sekolah->nama_sekolah }}">
                        <div class="text-danger">
                          @error('nama_sekolah')
                          {{ $message }}
                          @enderror
                        </div>
                      </div>
                      <div class="form-group">
                        <label>ID Potensi</label>
                        <input name="id_potensi" type="text" class="form-control" placeholder="ID Potensi" value="{{ $sekolah->id_potensi }}">
                        <div class="text-danger">
                          @error('id_potensi')
                          {{ $message }}
                          @enderror
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Jenjang Sekolah</label>
                        <select name="id_jenjang_sekolah" class="form-control">
                          <option value="{{ $sekolah->id_jenjang_sekolah }}">{{ $sekolah->jenjang_sekolah }}</option>
                          @foreach($jenjang as $j)
                            <option value="{{ $j->id }}">{{ $j->jenjang_sekolah }}
                          @endforeach
                        </select>
                        <div class="text-danger">
                          @error('id_jenjang_sekolah')
                          {{ $message }}
                          @enderror
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Jenis Sekolah</label>
                        <select name="id_jenis_sekolah" class="form-control">
                          <option value="{{ $sekolah->id_jenis_sekolah }}">{{ $sekolah->jenis_sekolah }}</option>
                          @foreach($jenis as $j)
                            <option value="{{ $j->id_jenis_sekolah }}">{{ $j->jenis_sekolah }}
                          @endforeach
                        </select>
                        <div class="text-danger">
                          @error('id_jenis_sekolah')
                          {{ $message }}
                          @enderror
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Alamat Sekolah</label>
                        <input name="alamat_sekolah" type="text" class="form-control" placeholder="Alamat Sekolah" value="{{ $sekolah->alamat }}">
                        <div class="text-danger">
                          @error('alamat_sekolah')
                          {{ $message }}
                          @enderror
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Koordinat</label>
                        <input name="koordinat" type="text" class="form-control" placeholder="Koordinat" value="{{ $sekolah->koordinat }}">
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
