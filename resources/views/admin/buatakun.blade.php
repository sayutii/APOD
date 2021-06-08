@extends('layouts.master')
@section('title','Admin -')
@section('content')
        <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-12">
              @if (session('message'))
                        <div class="alert alert-success alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>&times;</span>
                                </button>
                                {{ session('message')}}
                            </div>
                        </div>
                        @endif
                <div class="card">
                <!-- <form action="{{ route('admin.buatakun.simpan') }}" method="POST">
                @csrf -->
                  <!-- <form method="post" class="needs-validation" novalidate=""> -->
                    <div class="card-header">
                      <h4>Pembuatan Akun</h4>
                    </div>
                    <div class="card-body">
                    <form action="{{ route('admin.buatakun.simpan') }}" method="POST">
                      @csrf
                      <div class="row">
                        <div class="form-group col-md-12 col-12">
                          <label>Nomor Induk Kependudukan*</label>
                          <input type="text" name="nik" value="{{ old('nik') }}" class="form-control">
                        </div>
                        <div class="form-group col-md-12 col-12">
                          <label>Nama Lengkap (Sesuai dengan KTP)*</label>
                          <input type="text" name="nama" value="{{ old('nama') }}" class="form-control">
                        </div>
                        <div class="form-group col-md-6 col-12">
                          <label>Tempat Lahir (Sesuai dengan KTP)*</label>
                          <input type="text" name="tempatlahir" value="{{ old('tempatlahir') }}" class="form-control">
                        </div>
                        <div class="form-group col-md-6 col-12">
                          <label>Tanggal Lahir (Sesuai dengan KTP)*</label>
                          <input type="date" name="tanggallahir" value="{{ old('tanggallahir') }}" class="form-control" value="" required="">
                       </div>
                        <div class="form-group col-md-2 col-12">
                          <!-- <label>Jenis Kelamin*</label>
                          <input type="text" name="jeniskel" value="{{ old('jeniskel') }}" class="form-control" required="">
                        </div>
                        <div class="form-group"> -->
                          <label>Jenis Kelamin*</label>
                          <select name="jeniskel" value="{{ old('jeniskel') }}" class="form-control">
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                          </select>
                        </div>
                        <div class="form-group col-md-12 col-12">
                          <label>Alamat*</label>
                          <input type="text" name="alamat" value="{{ old('alamat') }}" class="form-control">
                        </div>
                        <div class="form-group col-md-6 col-12">
                          <label>Password*</label>
                          <input type="password" name="password" value="{{ old('password') }}" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Simpan</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
@endsection

@push('page-scripts')

@endpush

@push('after-script')

@endpush