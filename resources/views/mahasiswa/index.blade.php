@extends('layouts.app')

@section('title', 'Halaman Mahasiswa')

@section('content')
  <section class="section">
    <div class="section-header">
      <h1>Data Mahasiswa</h1>
    </div>

    <div class="section-body">
      <h2 class="section-title">This is Example Page</h2>
      <p class="section-lead">This page is just an example for you to create your own page.</p>

      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="card card-statistic-2">
            <div class="card-icon shadow-primary bg-primary">
              <i class="fas fa-shopping-bag"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Total Mahasiswa</h4>
              </div>
              <div class="card-body">
                4,732
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="card card-statistic-2">
            <div class="card-icon shadow-primary bg-primary">
              <i class="fas fa-shopping-bag"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Mahasiswa Aktif</h4>
              </div>
              <div class="card-body">
                4,732
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="card">
        <div class="card-header">
          <h4>Tabel Data Mahasiswa</h4>
          <div class="card-header-action">
            <a href="#" class="btn btn-primary">
              <span class="text-2xl">+</span>
              <span>New Mahasiswa</span>
            </a>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-striped table-md">
              <tbody><tr>
                <th>#</th>
                <th>Nama</th>
                <th>NRP</th>
                <th>Status</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th class="text-center">Action</th>
              </tr>
              <tr>
                <td>1</td>
                <td>Adrian Sondang</td>
                <td>3123500038</td>
                <td>
                  <div class="badge badge-success">Active</div>
                </td>
                <td>Sidoarjo</td>
                <td>0895350353300</td>
                <td class="text-center">
                  <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                  <a class="btn btn-danger btn-action trigger--fire-modal-3" data-toggle="tooltip" title="" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i class="fas fa-trash"></i></a>
                </td>
            </tbody></table>
          </div>
        </div>
        <div class="card-footer text-right">
          <nav class="d-inline-block">
            <ul class="pagination mb-0">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section>
@endsection