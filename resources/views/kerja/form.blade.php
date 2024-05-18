@extends('layouts.master')
@section('judul','Data Kerja')

@section('konten')

    <div class="container-fluid" style="margin-bottom: 600px">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Kerja</h6>
        </div>
        <div class="card-body">
          <form method="post" action="/kerja/store/">
            @csrf
            <div class="mb-3">
                <label class="form-label">KEGIATAN</label>
                <input type="text" class="form-control" name="kegiatan">
            </div>
            <div class="mb-3">
                <label class="form-label">ANGGARAN</label>
                <input type="number" class="form-control" name="anggaran">
            </div>
            <div class="mb-3">
                <label class="form-label">TANGGAL</label>
                <input type="date" class="form-control" name="tgl">
            </div>
            <button type="submit" class="btn btn-primary" style="margin-left: 1083px">Tambah Data</button>
        </form> 
          </div>
        </div>

    </div>

@endsection

