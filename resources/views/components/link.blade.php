@props(['active' => false])
<li class="nav-item mb-md-2">
    <a {{ $attributes }} class="nav-link text-light font-weight-bold {{ $active ? 'active bg-dark text-white' : '' }}">
        {{ $slot }}
    </a>
</li>