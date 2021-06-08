@extends('layouts.user.app')
@section('title','User -')
@section('content')
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">Profile</div>
            </div>
          </div>
          <div class="section-body">
            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                  <form method="post" class="needs-validation" novalidate="">
                    <div class="card-header">
                      <h4>Edit Profile</h4>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="form-group col-md-12 col-12">
                            <label>NIK</label>
                            <input type="text" class="form-control" value="123456" required="">
                            <div class="invalid-feedback">
                              Please fill in the first name
                            </div>
                          </div>
                          <div class="form-group col-md-12 col-12">
                            <label>Nama</label>
                            <input type="text" class="form-control" value="Sayuti" required="">
                            <div class="invalid-feedback">
                              Please fill in the first name
                            </div>
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" value="Banda Aceh" required="">
                            <div class="invalid-feedback">
                              Please fill in the last name
                            </div>
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" value="" required="">
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label>Jenis Kelamin</label>
                            <input type="text" class="form-control" value="Laki-laki" required="">
                            <div class="invalid-feedback">
                              Please fill in the last name
                            </div>
                          </div>
                          <div class="form-group col-md-12 col-12">
                            <label>Alamat</label>
                            <input type="text" class="form-control" value="Banda Aceh" required="">
                            <div class="invalid-feedback">
                              Please fill in the last name
                            </div>
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label>Password</label>
                            <input type="password" class="form-control" value="123456" required="">
                            <div class="invalid-feedback">
                              Please fill in the last name
                            </div>
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
          </div>
        </section>
      </div>
@endsection

@push('page-scripts')

@endpush