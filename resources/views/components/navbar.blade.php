<nav class="navbar navbar-expand-lg bg-body-tertiary" id="navbar" style="padding: 5px 20px;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('images/logo-cekbeasiswa.png') }}" alt="Logo Cek Beasiswa" height="40" loading="lazy">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Panduan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Kontak</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-button type="submit" class="me-2" width="100">
                    Logout
                </x-button>
            </form>
        </ul>
        </li>
        </ul>
      </div>
    </div>
  </nav>
