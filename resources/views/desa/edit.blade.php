@extends('layouts.master')
@section('judul','Dana Desa')

@section('konten')

    <div class="container-fluid" style="margin-bottom: 600px">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Edit Dana Desa</h6>
        </div>
        <div class="card-body">     
        <form method="POST" action="/danadesa/{{$dandes->id}}">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label class="form-label">KODE</label>
                <input type="text" value="{{$dandes->kode}}" class="form-control" name="kode" id="kodeInput" readonly>
            </div>
            <div class="mb-3">
                <label class="form-label">PENDAPATAN</label>
                <input type="number" value="{{$dandes->pendapatan}}" class="form-control" name="pendapatan">
            </div>
            <div class="mb-3">
                <label class="form-label">ANGGARAN</label>
                <input type="number" value="{{$dandes->anggaran}}" class="form-control" name="anggaran">
            </div>
            <div class="mb-3">
                <label class="form-label">REALISASI</label>
                <input type="number" value="{{$dandes->realisasi}}" class="form-control" name="realisasi">
            </div>
            <div class="mb-3">
                <label class="form-label">SISA</label>
                <input type="number" value="{{$dandes->sisa}}" class="form-control" name="sisa">
            </div>
            <button type="submit" class="btn btn-primary" style="margin-left: 1083px">Tambah Data</button>
        </form> 
          </div>
        </div>

    </div>

    <script>
      // Mendapatkan referensi elemen input
      var kodeInput = document.getElementById('kodeInput');
  
      // Menambahkan event listener untuk mendengarkan setiap kali pengguna mengetik di dalam input
      kodeInput.addEventListener('input', function(event) {
          // Mendapatkan nilai dari input
          var inputValue = event.target.value;
  
          // Menghapus karakter yang bukan angka atau titik
          var sanitizedValue = inputValue.replace(/[^\d.]/g, '');
  
          // Memastikan hanya ada satu titik dalam nilai
          if (sanitizedValue.split('.').length > 2) {
              // Jika terdapat lebih dari satu titik, hapus semua kecuali yang pertama
              sanitizedValue = sanitizedValue.replace(/(.*\..*)\./g, '$1');
          }
  
          // Memperbarui nilai input dengan nilai yang sudah difilter
          event.target.value = sanitizedValue;
      });
  </script>

@endsection

