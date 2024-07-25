<li class="nav-item">
    <a wire:navigate class="nav-link text-light {{ Request::is('dashboard') ? 'active bg-dark text-white': '' }}"
        href="{{ route('dashboard') }}">
        <i class="fa-solid fa-house"></i>
        Dashboard
    </a>
</li>