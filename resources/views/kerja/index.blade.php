@extends('layouts.master')
@section('judul','Kerja')

@section('konten')

    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Kerja</h6>
            <a href="/kerja/form/" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data </a>
        </div>
        <div class="card-body" style="margin-bottom: 600px">
            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>KEGIATAN</th>
                            <th>ANGGARAN</th>
                            <th>TANGGAL</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @forelse ($kerja as $item)
                        <tr>
                            <td>{{$nomor++}}</td>
                            <td>{{$item->kegiatan}}</td>
                            <td>{{$item->anggaran}}</td>
                            <td>{{ \Carbon\Carbon::parse($item->tgl)->format('d M Y') }}</td>
                            <td style="text-align: center">
                                <a href="/belanja/edit/{{$item->id}}" class="btn btn-sm btn-info">edit</a>
        
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-default{{$item->id}}">
                                  hapus
                                </button>
                                <div class="modal fade" id="modal-default{{$item->id}}">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title">Peringatan!</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <p>Yakin data ini {{$item->jurusan}} ingin dihapus?</p>
                                      </div>
                                      <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                        <form action="/belanja/{{$item->id}}" method="POST">
                                          @method('DELETE')
                                          @csrf
                                          <button type="submit" class="btn btn-primary">Hapus</button>
                                        </form>
                                      </div>
                                    </div>
                                    <!-- /.modal-content -->
                                  </div>
                                  <!-- /.modal-dialog -->
                                </div>
                            </td>
                        </tr>
                       
                        @empty
                        <tr>
                            <td colspan="6">Tidak Ada Data</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        </div>

    </div>

@endsection

