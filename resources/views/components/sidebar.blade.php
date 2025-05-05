<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; height:100%">
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('dashboard', ['username' => request('username')]) }}"
                class="nav-link {{ Request::routeIs('dashboard') ? 'active text-white bg-primary' : 'link-dark' }}">
                <i class="bi bi-border-all me-2"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('pengelolaan', ['username' => request('username')]) }}"
                class="nav-link {{ Request::routeIs('pengelolaan') ? 'active text-white bg-primary' : 'link-dark' }}">
                    <i class="bi bi-mortarboard-fill me-2"></i>
                    Beasiswa
            </a>
        </li>
        <li>
            <a href="{{ route('profile', ['username' => request('username')]) }}"
                class="nav-link {{ Request::routeIs('profile') ? 'active text-white bg-primary' : 'link-dark' }}">
                    <i class="bi bi-person-fill me-2"></i>
                    Profil
            </a>
        </li>
    </ul>
</div>
