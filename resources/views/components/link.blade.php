@props(['active' => false])
<li class="nav-item">
    <a {{ $attributes }} class="nav-link text-light {{ $active ? 'active bg-dark text-white' : '' }}">
        {{ $slot }}
    </a>
</li>