@extends('layout.main')
@section('main')

<div class="row justify-content-center">
  <div class="col-md-5">
    <form action="login" method="POST" class="mt-5">
      @csrf
      <h2 style="text-align: center">{{ $judul }}</h2>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input name="username" type="text" class="form-control text-muted" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input name="password" type="password" class="form-control text-muted" id="exampleInputPassword1">
      </div>
      <div>
          <button type="submit" class="btn btn-info">Login</button>
          <button class="btn btn-info"><a href="/register" class="text-dark" style="text-decoration: none">Belum Punya Akun</a></button>
      </div>
    </form>
  </div>
</div>

 
@endsection
