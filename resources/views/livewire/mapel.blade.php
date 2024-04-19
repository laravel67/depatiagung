<div class="row">
    <div class="col-md-7">
        <div class="row mb-3">
            <div class="col col-md-6">
                <a class="btn btn-success btn-sm" href="{{ route('mapel.create') }}"><i
                        class="fa-solid fa-circle-plus"></i>
                    Mapel</a>
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
                        <th>No.</th>
                        <th>Mata Pelajaran</th>
                        <th>Slug Mapel</th>
                        <th>
                            Opsi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($mapels as $i=> $mapel)
                    <tr>
                        <td>{{ $mapels->firstItem()+$i }}</td>
                        <td>{{ $mapel->name }}</td>
                        <td>{{ $mapel->slug }}</td>
                        <td>
                            <div class="btn btn-group">
                                <a href="{{ route('mapel.edit', $mapel->slug) }}"
                                    class="btn btn-sm btn-warning text-white"><i class="fa-solid fa-edit"></i></a>
                                <button wire:click.prevent='deleting("{{ $mapel->slug }}")'
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
            {!! $mapels->links() !!}
        </div>
    </div>
    <div class="col-md-3 d-none d-md-flex">
        <img src="{{ asset('backend/img/undraw_designer_girl_re_h54c.svg') }}" class="img-fluid">
    </div>
</div>