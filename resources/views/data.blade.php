@extends('layout.main')
@section('main')
@if (session('sukses'))
<div class="alert alert-info" role="alert">
    {{ session('sukses') }}
  </div>   
@elseif (session('log'))
<div class="alert alert-info" role="alert">
    {{ session('log') }}
  </div> 
@endif


@if (session('log'))
    <button type="button" class="btn btn-dark mt-3 float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Data
    </button> 
@endif
  
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Masukan Data Barang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="data/input" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                          <input name="namabarang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Alamat Barang</label>
                          <input name="alamat" type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Pengirim</label>
                            <input name="pengirim" type="text" class="form-control" id="exampleInputPassword1">
                          </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Penerima</label>
                            <input name="penerima" type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <label for="disabledSelect" class="form-label">Status Pengiriman</label>
                        <select name="statusbarang" id="disabledSelect" class="form-select">
                          <option>Dalam Pengiriman</option>
                          <option>Dikirim</option>
                          <option>Diterima</option>
                        </select>
                        <div class="mb-3 form-check mt-5">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Data Sudah Benar</label>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Input</button>
                        </div>
                      </form>
                </div>
            </div>
            </div>
        </div>  
<div class="row">        
    <div class="col">
        <h1>Data Barang Di Gudang</h1>
        <p>Data Barang yang sedang Berada Di dalam gudang</p>       
    </div>
    <div class="col">
      
    </div>

    <table class="table mt-3">

        <tr class="table-dark">
            <th>No</th>
            <th>Nama Barang</th>
            <th>Alamat Pengiriman</th>
            <th>Nama Pengirim</th>
            <th>Nama Penerima</th>
            <th>Status Barang</th>
            <th>Edit</th>
        </tr>
        @foreach ($data as $gudang)
        <tr>
            <th>{{ $gudang->id }}</th>
            <th>{{ $gudang->namabarang }}</th>
            <th>{{ $gudang->alamat }}</th>
            <th>{{ $gudang->pengirim }}</th>
            <th>{{ $gudang->penerima }}</th>
            <th>{{ $gudang->statusbarang }}</th>
            <th>
                <a href="/data/{{ $gudang->id }}/edit" class="btn-warning btn-sm">Edit</a>
                <a href="/data/{{ $gudang->id }}/deleted" class="btn-danger btn-sm">Deleted</a>
            </th>
            
        </tr>
        @endforeach      
    </table>
</div>
@endsection