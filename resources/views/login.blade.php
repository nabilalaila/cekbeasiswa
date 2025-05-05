@extends('layouts.app')

@section('content')
<section class="vh-100" style="background-color: #F8F9FA;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="{{ asset('images/login.png') }}"
                                 alt="login form" class="img-fluid h-100"
                                 style="border-radius: 1rem 0 0 1rem; object-fit: cover;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="d-flex justify-content-center align-items-center mb-4" style="height: 50px;">
                                        <img src="{{ asset('images/logo-cekbeasiswa.png') }}"
                                             alt="Logo Cek Beasiswa"
                                             class="img-fluid" style="max-height: 50px;" />
                                    </div>

                                    <h5 class="fw-bold mb-3 pb-3 text-center text-align-center" style="letter-spacing: 1px;">
                                        Masuk dan temukan banyak informasi menarik! 💫
                                    </h5>

                                    <div class="mb-4">
                                        <label for="formUsername" class="form-label">Username</label>
                                        <input type="text" name="username" id="formUsername" class="form-control form-control-lg" required />
                                    </div>

                                    <div class="mb-4">
                                        <label for="formPassword" class="form-label">Password</label>
                                        <input type="password" name="password" id="formPassword" class="form-control form-control-lg" required />
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <x-button type="primary" class="me-2" width="100">
                                            Login
                                        </x-button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
