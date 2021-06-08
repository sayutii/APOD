@extends('layouts.user.app')
@section('title','User -')
@section('content')
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="{{url('/lihatsurat')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Surat Keterangan</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{url('/homeuser')}}">Dashboard</a></div>
              <div class="breadcrumb-item active"><a href="{{url('/lihatsurat')}}">Lihat Surat</a></div>
              <div class="breadcrumb-item">Buat</div>
            </div>
          </div>

          <div class="section-body">
            <div id="output-status"></div>
            <div class="row">
              <div class="col-md-4">
                <div class="card">
                  <div class="card-header">
                    <h4>Aksi</h4>
                  </div>
                  <div class="card-body">
                    <ul class="nav nav-pills flex-column">
                      <li class="nav-item"><a href="#" class="nav-link active">Buat</a></li>
                      <li class="nav-item"><a href="#" class="nav-link">Lihat</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-8">
                <form id="setting-form">
                  <div class="card" id="settings-card">
                    <div class="card-header">
                      <h4>Mohon Diisi Dengan Benar</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group row align-items-center">
                        <label for="site-title" class="form-control-label col-sm-3 text-md-right">Nama</label>
                        <div class="col-sm-6 col-md-9">
                          <input type="text" name="site_title" class="form-control" id="site-title">
                        </div>
                      </div>
                      <div class="form-group row align-items-center">
                        <label for="site-title" class="form-control-label col-sm-3 text-md-right">Tempat Lahir</label>
                        <div class="col-sm-6 col-md-9">
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row align-items-center">
                        <label for="site-title" class="form-control-label col-sm-3 text-md-right">Tanggal Lahir</label>
                        <div class="col-sm-6 col-md-6">
                          <input type="date" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row align-items-center">
                        <label for="site-title" class="form-control-label col-sm-3 text-md-right">Jenis Kelamin</label>
                        <div class="col-sm-6 col-md-6">
                          <input type="text" class="form-control">
                        </div>
                      </div><div class="form-group row align-items-center">
                        <label for="site-title" class="form-control-label col-sm-3 text-md-right">Nomor KTP</label>
                        <div class="col-sm-6 col-md-9">
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row align-items-center">
                        <label for="site-title" class="form-control-label col-sm-3 text-md-right">Alamat</label>
                        <div class="col-sm-6 col-md-9">
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="card-footer bg-whitesmoke text-md-right">
                      <button class="btn btn-primary" id="save-btn">Simpan</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
  		    </div>
      	</section>
      </div>
@endsection

@push('page-scripts')

@endpush