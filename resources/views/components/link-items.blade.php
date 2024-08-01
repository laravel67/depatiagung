<x-sidebar>
    <x-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
        <i class="fa-solid fa-house"></i>
        {{ __('Dashboard') }}
    </x-link>
    <x-link href="{{ route('apost.index') }}" :active="request()->is('dashboard/posts*')">
        <i class="fa-solid fa-newspaper"></i>
        {{ __('Postingan') }}
    </x-link>
    @can('admin')
    <x-link href="{{ route('category.index') }}" :active="request()->is('dashboard/categories*')">
        <i class="fa-solid fa-tags"></i>
        {{ __('Kategori') }}
    </x-link>
    @endcan
    @can('admin')
    <x-link href="{{ route('admin.jabatan') }}" :active="request()->is('dashboard/jabatan*')">
        <i class="fa-solid fa-briefcase"></i>
        {{ __('Data Jabatan') }}
    </x-link>
    <x-link href="{{ route('admin.bidang') }}" :active="request()->is('dashboard/bidang*')">
        <i class="fas fa-layer-group"></i>
        {{ __('Data Bidang') }}
    </x-link>
    @endcan
    <x-link href="{{ route('mapel.index') }}" :active="request()->is('dashboard/mapels*')">
        <i class="fa-solid fa-book"></i>
        {{ __('Mata Pelajaran') }}
    </x-link>
    <x-link href="{{ route('asarana.index') }}" :active="request()->is('dashboard/sarana*')">
        <i class="fa-solid fa-landmark"></i>
        {{ __('Sarana Prasarana') }}
    </x-link>
    <x-link href="{{ route('guru.index') }}" :active="request()->is('dashboard/guru*')">
        <i class="fa-solid fa-chalkboard-user"></i>
        {{ __('Data Guru') }}
    </x-link>
    <x-link href="{{ route('prestasi.index') }}" :active="request()->is('dashboard/prestasi*')">
        <i class="fa-solid fa-trophy"></i>
        {{ __('Prestasi/Penghargaan') }}
    </x-link>
    <x-link href="{{ route('daftar.index') }}" :active="request()->is('dashboard/pendaftaran*')">
        <i class="fa-solid fa-address-card"></i>
        {{ __('Data Pendaftaran') }}
    </x-link>
    @can('admin')
    <x-link href="{{ route('set.reg') }}" :active="request()->is('dashboard/pengaturan/pendaftaran*')">
        <i class="fa-solid fa-users-gear"></i>
        {{ __('Pengaturan Pendaftaran') }}
    </x-link>
    @endcan
    <x-link href="{{ route('admin.kesiswaan') }}" :active="request()->is('dashboard/kesiswaan*')">
        <i class="fa-solid fa-star"></i>
        {{ __('Ekstra Kulikuler') }}
    </x-link>
    <x-link href="{{ route('admin.struktur') }}" :active="request()->is('dashboard/struktural*')">
        <i class="fa-solid fa-sitemap"></i>
        {{ __('Struktur') }}
    </x-link>
    @can('admin')
    <x-link href="{{ route('user.index') }}" :active="request()->is('dashboard/users*')">
        <i class="fa-solid fa-users"></i>
        {{ __('Data Pengguna') }}
    </x-link>
    <x-link href="{{ route('pengaturan') }}" :active="request()->is('dashboard/pengaturan/umum*')">
        <i class="fa-solid fa-cog"></i>
        {{ __('Pengaturan') }}
    </x-link>
    @endcan
</x-sidebar>