@extends('layouts.app')

@section('title', 'Tambah Mahasiswa')

@section('content')
  <section class="section">
    <div class="section-header">
      <h1>Tambah Data Mahasiswa</h1>
    </div>

    <div class="section-body">
      <h2 class="section-title">This is Example Page</h2>
      <p class="section-lead">This page is just an example for you</p>

      <div class="card w-50 mx-auto">
        <form action="{{ route('mahasiswa.store') }}" method="POST">
          @csrf
          <div class="card-header">
            <h4>Form Tambah Mahasiswa</h4>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" name="nama" required="">
            </div>
            <div class="form-group">
              <label>NRP</label>
              <input type="text" class="form-control" name="nrp" required="">
            </div>
            <div class="form-group">
              <label>Status</label>
              <select class="form-control" name="status">
                <option value="aktif" selected>Aktif</option>
                <option value="tidak aktif">Tidak Aktif</option>
              </select>
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <textarea class="form-control" name="alamat" required=""></textarea>
            </div>
            <div class="form-group mb-0">
              <label>No HP</label>
              <input type="text" class="form-control" name="no_hp" required="">
            </div>
          </div>
          <div class="card-footer text-center row">
            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
              <a href="{{ route('mahasiswa.index') }}" class="btn btn-danger w-100">Cancel</a>
            </div>
            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
              <button class="btn btn-primary w-100">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
@endsection