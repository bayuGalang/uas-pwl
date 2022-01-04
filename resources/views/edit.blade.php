@extends('layout.main')
@section('main')
<h1>
    Silahkan Untuk Mengubah Data Barang ke - {{ $info->id }}
</h1>
<form action="/data/{{ $info->id }}/update " method="POST" class="mt-5">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
      <input name="namabarang" value="{{ $info->namabarang }}" type="text" class="form-control text-muted" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Alamat Barang</label>
      <input name="alamat" value="{{ $info->alamat }}" type="text" class="form-control text-muted" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nama Pengirim</label>
        <input name="pengirim" value="{{ $info->pengirim }}" type="text" class="form-control text-muted" id="exampleInputPassword1">
      </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nama Penerima</label>
        <input name="penerima" value="{{ $info->penerima }}" type="text" class="form-control text-muted" id="exampleInputPassword1">
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
        <button type="submit" class="btn btn-warning">Update</button>
        <button class="btn btn-info"><a href="/data" class="text-dark" style="text-decoration: none">Kembali</a></button>
    </div>
  </form>

@endsection
     