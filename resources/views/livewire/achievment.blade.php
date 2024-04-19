<div class="row">
    <div class="col-md-7">
        <div class="row mb-3">
            <div class="col col-md-6">
                <a class="btn btn-success btn-sm" href="{{ route('prestasi.create') }}"><i
                        class="fa-solid fa-circle-plus"></i>
                    Tambah Achievment</a>
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
                        <th>Nama Achievment</th>
                        <th>Kategori</th>
                        <th>
                            Opsi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($achievments as $i=> $achievment)
                    <tr class=" ">
                        <td>
                            @if ($achievment->image)
                            <img src="{{ asset('storage/'.$achievment->image) }}" class=" rounded-circle" width="50"
                                height="50">
                            @else
                            <img class="rounded-circle"
                                src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                alt="Generic placeholder image" width="50" height="50">
                            @endif
                        </td>
                        <td>{{ $achievment->title }}</td>
                        <td>{{ $achievment->category }}</td>
                        <td>
                            <div class="btn btn-group">
                                <a href="{{ route('prestasi.show', $achievment->slug) }}"
                                    class="btn btn-sm btn-success text-white"><i class="fa-solid fa-eye"></i></a>
                                <a href="{{ route('prestasi.edit', $achievment->slug) }}"
                                    class="btn btn-sm btn-warning text-white"><i class="fa-solid fa-edit"></i></a>
                                <button wire:click.prevent='deleting("{{ $achievment->slug }}")'
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
            {!! $achievments->links() !!}
        </div>
    </div>
    <div class="col-md-3 d-none d-md-flex">
        <img src="{{ asset('backend/img/undraw_designer_girl_re_h54c.svg') }}" class="img-fluid">
    </div>
</div>