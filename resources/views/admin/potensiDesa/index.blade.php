@extends('layouts.admin')
@section('content')
<div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Data {{ $title }}</h3>

                <div class="card-tools">
                  <a href="/potensidesa/add" type="button" class="btn btn-primary btn-sm btn-flat">Tambah Potensi Desa</a>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-small">
                    <thead>
                      <tr>
                        <th width="50px" class="text-center">No</th>
                        <th class="text-center">Potensi Desa</th>
                        <th class="text-center">Ikon</th>
                        <th class="text-center" width="80px">Tindakan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no=1; ?>
                      @foreach($potensiDesa as $d)
                      <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">{{ $d->nama_potensi }}</td>
                        <td class="text-center"><img src="{{ asset('icon') }}/{{ $d->icon }}" width="70px";height="70px";></td>
                        <td class="text-center">
                          <button class="btn btn-sm btn-flat btn-warning"><a href="/potensidesa/edit/{{ $d->id }}" ><i class="fa fa-edit"></i></a></button>
                          <button class="btn btn-sm btn-flat btn-danger"><a href="/potensidesa/delete/{{ $d->id }}" ><i class="fa fa-trash"></i></a></button>
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