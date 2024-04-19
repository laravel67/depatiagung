<div class="row">
    <div class="col-md-7">
        <div class="row mb-3">
            <div class="col col-md-6">
                <a class="btn btn-success btn-sm" href="{{ route('guru.create') }}"><i
                        class="fa-solid fa-circle-plus"></i>
                    Tambah Guru</a>
            </div>
            <div class="col-7 col-md-6">
                <input type="search" wire:model.live="search" class="form-control form-control-sm"
                    placeholder="Cari...">
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Nama Guru</th>
                        <th>
                            Opsi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($teachers as $i=> $guru)
                    <tr>
                        <td>
                            @if ($guru->image)
                            <img src="{{ asset('storage/'.$guru->image) }}" class=" rounded-circle" width="50"
                                height="50">
                            @else
                            <img class="rounded-circle"
                                src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                alt="Generic placeholder image" width="50" height="50">
                            @endif
                        </td>
                        <td>{{ $guru->name }}</td>
                        <td>
                            <div class="btn btn-group">
                                <a href="{{ route('guru.show', $guru->slug) }}"
                                    class="btn btn-sm btn-success text-white">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a href="{{ route('guru.edit', $guru->slug) }}"
                                    class="btn btn-sm btn-warning text-white">
                                    <i class="fa-solid fa-edit"></i>
                                </a>
                                <button wire:click.prevent='deleting("{{ $guru->slug }}")'
                                    class="btn btn-sm btn-danger text-white">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
            {!! $teachers->links() !!}
        </div>
    </div>
    <div class="col-md-3 d-none d-md-flex">
        <img src="{{ asset('backend/img/undraw_designer_girl_re_h54c.svg') }}" class="img-fluid">
    </div>
</div>