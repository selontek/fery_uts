@extends('layouts.master')
@section('judul','Belanja')

@section('konten')

    <div class="container-fluid" style="margin-bottom: 600px">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Edit Dana Desa</h6>
        </div>
        <div class="card-body">     
        <form method="POST" action="/belanja/{{$belanja->id}}">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label class="form-label">BARANG</label>
                <input type="text" value="{{$belanja->barang}}" class="form-control" name="barang">
            </div>
            <div class="mb-3">
                <label class="form-label">HARGA</label>
                <input type="number" value="{{$belanja->harga}}" class="form-control" name="harga">
            </div>
            <div class="mb-3">
                <label class="form-label">TANGGAL</label>
                <input type="date" value="{{$belanja->tgl}}" class="form-control" name="tgl">
            </div>
            <button type="submit" class="btn btn-primary" style="margin-left: 1083px">Tambah Data</button>
        </form> 
          </div>
        </div>

    </div>

@endsection

