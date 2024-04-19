<div class="row">
    <div class="col-md-7">
        <div class="row mb-3">
            <div class="col col-md-6">
                <a class="btn btn-success btn-sm" href="{{ route('asarana.create') }}"><i
                        class="fa-solid fa-circle-plus"></i>
                    Sarana Prasarana</a>
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
                        <th>Nama SP</th>
                        <th>Slug SP</th>
                        <th>
                            Opsi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($saranas as $i=> $sarana)
                    <tr class=" ">
                        <td>
                            @if ($sarana->image)
                            <img src="{{ asset('storage/'.$sarana->image) }}" class=" rounded-circle" width="50"
                                height="50">
                            @else
                            <img class="rounded-circle"
                                src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                alt="Generic placeholder image" width="50" height="50">
                            @endif
                        </td>
                        <td>{{ $sarana->name }}</td>
                        <td>{{ $sarana->slug }}</td>
                        <td>
                            <div class="btn btn-group">
                                <a href="{{ route('asarana.show', $sarana->slug) }}"
                                    class="btn btn-sm btn-success text-white"><i class="fa-solid fa-eye"></i></a>
                                <a href="{{ route('asarana.edit', $sarana->slug) }}"
                                    class="btn btn-sm btn-warning text-white"><i class="fa-solid fa-edit"></i></a>
                                <button wire:click.prevent='deleting("{{ $sarana->slug }}")'
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
            {!! $saranas->links() !!}
        </div>
    </div>
    <div class="col-md-3 d-none d-md-flex">
        <img src="{{ asset('backend/img/undraw_designer_girl_re_h54c.svg') }}" class="img-fluid">
    </div>
</div>