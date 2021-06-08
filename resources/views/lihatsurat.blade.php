@extends('layouts.user.app')
@section('title','User -')
@section('content')
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Layanan Surat</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{url('/homeuser')}}">Dashboard</a></div>
              <div class="breadcrumb-item">Lihat Surat</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Pilih Jenis Surat</h2>
            <p class="section-lead">
              Organize and adjust all settings about this site.
            </p>

            <div class="row">
              <div class="col-lg-6">
                <div class="card card-large-icons">
                  <div class="card-icon bg-primary text-white">
                    <i class="far fa-file-alt"></i>
                  </div>
                  <div class="card-body">
                    <h4>Surat Keterangan Kurang Mampu</h4>
                    <p>Surat yang digunakan untuk keperluan pengajuan beasiswa.</p>
                    <a href="{{url('/buatskm')}}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Buat</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card card-large-icons">
                  <div class="card-icon bg-primary text-white">
                    <i class="far fa-file-alt"></i>
                  </div>
                  <div class="card-body">
                    <h4>Surat Keterangan Usaha</h4>
                    <p>Surat yang menjadi bukti sekaligus legelitas dari keberadaan suatu usaha.</p>
                    <a href="{{('/buatsku')}}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Buat</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card card-large-icons">
                  <div class="card-icon bg-primary text-white">
                    <i class="far fa-file-alt"></i>
                  </div>
                  <div class="card-body">
                    <h4>Surat Keterangan Berkelakuan Baik</h4>
                    <p>Surat yang menjadi bukti bahwa seseorang memang benar memiliki kelakuan baik.</p>
                    <a href="{{('/buatskbb')}}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Buat</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card card-large-icons">
                  <div class="card-icon bg-primary text-white">
                    <i class="far fa-file-alt"></i>
                  </div>
                  <div class="card-body">
                    <h4>Rekomendasi Kartu Tanda Penduduk (KTP)</h4>
                    <p>Search engine optimization settings, such as meta tags and social media.</p>
                    <a href="{{url('/buatrekomktp')}}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Buat</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card card-large-icons">
                  <div class="card-icon bg-primary text-white">
                    <i class="far fa-file-alt"></i>
                  </div>
                  <div class="card-body">
                    <h4>Rekomendasi Kartu Keluarga (KK)</h4>
                    <p>Email SMTP settings, notifications and others related to email.</p>
                    <a href="{{url('/buatrekomkk')}}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Buat</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card card-large-icons">
                  <div class="card-icon bg-primary text-white">
                    <i class="far fa-file-alt"></i>
                  </div>
                  <div class="card-body">
                    <h4>Surat Keterangan</h4>
                    <p>Surat keterangan biasa adalah surat keterangan yang di berikan kepada seseorang di tengah-tengah kesibukan sehari-hari, seperti surat keterangan sebagai mahasiswa.</p>
                    <a href="{{ url('/buatsuket') }}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Buat</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card card-large-icons">
                  <div class="card-icon bg-primary text-white">
                    <i class="far fa-file-alt"></i>
                  </div>
                  <div class="card-body">
                    <h4>Surat Keterangan Belum Nikah</h4>
                    <p>Surat pernyataan resmi sebagai keterangan seseorang belum menikah.</p>
                    <a href="{{ url('/buatsnikah') }}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Buat</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card card-large-icons">
                  <div class="card-icon bg-primary text-white">
                    <i class="far fa-file-alt"></i>
                  </div>
                  <div class="card-body">
                    <h4>Surat Keterangan Domisili</h4>
                    <p>Surat pernyataan resmi sebagai keterangan tempat tinggal.</p>
                    <a href="{{ url('/buatsdomisili') }}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Buat</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card card-large-icons">
                  <div class="card-icon bg-primary text-white">
                    <i class="far fa-file-alt"></i>
                  </div>
                  <div class="card-body">
                    <h4>Surat Pengantar SKCK</h4>
                    <p>Settings about automation such as cron job, backup automation and so on.</p>
                    <a href="#" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Buat</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card card-large-icons">
                  <div class="card-icon bg-primary text-white">
                    <i class="far fa-file-alt"></i>
                  </div>
                  <div class="card-body">
                    <h4>Surat Keterangan Kematian</h4>
                    <p>Settings about automation such as cron job, backup automation and so on.</p>
                    <a href="#" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Buat</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card card-large-icons">
                  <div class="card-icon bg-primary text-white">
                    <i class="far fa-file-alt"></i>
                  </div>
                  <div class="card-body">
                    <h4>Surat Keterangan Kelahiran</h4>
                    <p>Settings about automation such as cron job, backup automation and so on.</p>
                    <a href="#" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Buat</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
@endsection

@push('page-scripts')

@endpush