@extends('layouts.app')

@section('content')
<div class="container py-5" id="profile" style="padding: 40px;">
  <h3 class="fw-bold text-center mb-4">👤 Profil</h3>
  <div class="row justify-content-center">
    <div class="col-12 col-md-8">
      <div class="card shadow-sm">
        <div class="card-body p-4">
          <dl class="row mb-0">
            <dt class="col-sm-4 fw-semibold">Nama</dt>
            <dd class="col-sm-8 mb-3">{{ $user['nama_lengkap'] }}</dd>
            <dt class="col-sm-4 fw-semibold">Username</dt>
            <dd class="col-sm-8 mb-3">{{ $user['username'] }}</dd>
            <dt class="col-sm-4 fw-semibold">Email</dt>
            <dd class="col-sm-8 mb-3">{{ $user['email'] }}</dd>
            <dt class="col-sm-4 fw-semibold">Jenis Kelamin</dt>
            <dd class="col-sm-8 mb-3">{{ $user['jenis_kelamin'] }}</dd>
            <dt class="col-sm-4 fw-semibold">No. Telepon</dt>
            <dd class="col-sm-8 mb-3">{{ $user['no_telp'] }}</dd>
            <dt class="col-sm-4 fw-semibold">Pendidikan Terakhir</dt>
            <dd class="col-sm-8 mb-0">{{ $user['sedang_menempuh'] }}</dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
