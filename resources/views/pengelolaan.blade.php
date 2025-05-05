@extends('layouts.app')

@section('content')
<div class="pengelolaan" style="padding: 40px;">
    <h3 class="fw-bold mb-3 pb-3 text-center text-align-center">Daftar Beasiswa</h3>
    <h5 class="fw-normal mb-3 pb-3 text-center"></h5>
    <div class="container px-1">
        <div class="row g-4">
            @foreach ($beasiswa as $item)
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="{{ $item['foto'] }}" class="card-img-top" alt="Foto Beasiswa" style="height: 150px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $item['nama_beasiswa'] }}</h5>
                            <p class="card-text">
                                <strong>Penyelenggara:</strong> {{ $item['Penyelenggara'] }}<br>
                                <strong>Periode Pendaftaran:</strong> {{ $item['awal_daftar'] }} - {{ $item['akhir_daftar'] }}<br>
                                <strong>Target:</strong> {{ $item['target'] }}<br>
                                <strong>Benefit:</strong> {{ $item['benefit'] }}<br>
                            </p>
                            <a href="{{ $item['informasi'] }}" class="btn btn-primary mt-auto" target="_blank">Cek Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
