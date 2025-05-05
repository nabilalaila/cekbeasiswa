@extends('layouts.app')

@section('content')
<div class="dashboard" style="padding: 40px;">
    <h3 class="fw-bold mb-3 pb-3 text-center text-align-center"><br>Hai, {{ $username }}!
         👋</h3>
    <h5 class="fw-normal mb-3 pb-3 text-center">Bagaimana kabarmu hari ini? <br> Siap untuk menjadi lebih baik dari hari kemarin? 💫</h5>
    <div class="d-flex justify-content-center align-items-center flex-row gap-2 vh-50">
        <div class="card" style="width: 18rem;height: 230px;">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">⚠️</h5>
                    @if ($beasiswaTerdekat)
                        <p class="card-text">
                            <strong>Beasiswa Terkini : <br>Ada {{$jumlahBeasiswaBuka}} beasiswa yang bisa kamu daftarkan</strong><br>
                            Ayo daftar sekarang!<br>
                        </p>
                        <a href="{{ route('pengelolaan') }}" class="btn btn-primary mt-auto" target="_blank"> Cek Selengkapnya</a>
                    @else
                        <p class="card-text">Tidak ada beasiswa yang mendekati deadline.</p>
                    @endif
            </div>
        </div>
        <div class="card" style="width: 18rem; height: 230px;">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">📌 </h5>
                @if ($beasiswaTerdekat)
                    <p class="card-text">
                        <strong>Deadline Terdekat :<br>{{ $beasiswaTerdekat['nama_beasiswa'] }}</strong><br>
                        Deadline: {{ \Carbon\Carbon::parse($beasiswaTerdekat['akhir_daftar'])->format('d M Y') }}
                    </p>
                    <a href="{{ $beasiswaTerdekat['informasi'] }}" class="btn btn-primary mt-auto" target="_blank">Lihat Detail</a>
                @else
                    <p class="card-text">Tidak ada beasiswa yang mendekati deadline.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
