<x-sidebar>
    <x-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
        <i class="fa-solid fa-house"></i>
        Dashboard
    </x-link>

    <x-link-title>{{ __('Kelola Postingan') }}</x-link-title>
    <x-link href="{{ route('apost.index') }}" :active="request()->is('dashboard/posts*')">
        <i class="fa-solid fa-newspaper"></i>
        Postingan
    </x-link>

    @can('admin')
    <x-link href="{{ route('category.index') }}" :active="request()->is('dashboard/categories*')">
        <i class="fa-solid fa-tags"></i>
        Kategori
    </x-link>
    @endcan

    <x-link-title>{{ __('Kelola Akademik') }}</x-link-title>
    <x-link href="{{ route('mapel.index') }}" :active="request()->is('dashboard/mapels*')">
        <i class="fa-solid fa-book"></i>
        Mata Pelajaran
    </x-link>

    <x-link href="{{ route('asarana.index') }}" :active="request()->is('dashboard/sarana*')">
        <i class="fa-solid fa-briefcase"></i>
        Sarana Prasarana
    </x-link>

    <x-link href="{{ route('guru.index') }}" :active="request()->is('dashboard/guru*')">
        <i class="fa-solid fa-chalkboard-user"></i>
        Data Guru
    </x-link>

    <x-link href="{{ route('prestasi.index') }}" :active="request()->is('dashboard/achievements*')">
        <i class="fa-solid fa-trophy"></i>
        Prestasi/Penghargaan
    </x-link>

    <x-link-title>{{ __('PPDB') }}</x-link-title>
    <x-link href="{{ route('daftar.index') }}" :active="request()->is('dashboard/pendaftaran*')">
        <i class="fa-solid fa-address-card"></i>
        Data Pendaftaran
    </x-link>

    @can('admin')
    <x-link href="{{ route('set.reg') }}" :active="request()->is('dashboard/pengaturan/pendaftaran*')">
        <i class="fa-solid fa-users-gear"></i>
        Pengaturan Pendaftaran
    </x-link>
    @endcan

    <x-link-title>{{ __('Kelola Kesiswaan') }}</x-link-title>
    <x-link href="{{ route('admin.kesiswaan') }}" :active="request()->is('dashboard/kesiswaan*')">
        <i class="fa-solid fa-star"></i>
        Ekstra Kulikuler
    </x-link>

    @can('admin')
    <x-link-title>{{ __('Admin') }}</x-link-title>
    <x-link href="{{ route('user.index') }}" :active="request()->is('dashboard/users*')">
        <i class="fa-solid fa-users"></i>
        Data Pengguna
    </x-link>

    <x-link href="{{ route('pengaturan') }}" :active="request()->is('dashboard/pengaturan/umum*')">
        <i class="fa-solid fa-cog"></i>
        Pengaturan
    </x-link>
    @endcan
</x-sidebar>