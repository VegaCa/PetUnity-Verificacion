<div class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        {{auth()->user()->name}}
    </a>
    <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="navbarDropdown">
        @if (auth()->user()->utype == 'ADMIN')
            <li><a class="dropdown-item" href="{{route('dashboard')}}"><i class="bi bi-person-square me-2"></i> Administración</a></li>
        @endif

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" role="button">
                    <i class="bi bi-power me-2"></i> Cerrar sesión
                </a>
            </li>
        </form>
    </ul>
</div>
