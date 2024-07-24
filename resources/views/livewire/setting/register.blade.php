{{-- <div>
    <form class="form-inline mt-3" wire:submit.prevent="{{ $isEditing ? 'update' : 'store' }}">
        <div class="form-group mb-2">
            <input type="text" wire:model.lazy="name" class="form-control @error('name') is-invalid @enderror" id="name"
                placeholder="Tahun Ajaran">
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-2">
            <input type="text" wire:model.lazy="ketua_penitia" class="form-control @error('ketua_penitia') is-invalid @enderror" id="ketua_penitia"
                placeholder="Nama Ketua Penitia">
            @error('ketua_penitia')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button wire:click="{{ $isEditing ? 'cancelEdit' : 'cancel' }}" type="button" class="btn mb-2 mr-3">
            <i class="fa-solid fa-times"></i>
        </button>
        <button type="submit" class="btn btn-success mb-2">
            {{ $isEditing ? 'Ubah':'Simpan' }}
        </button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Tahun Ajaran</th>
                <th scope="col">Ketua Penitia</th>
                <th scope="col">Status</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tajs as $i=>$taj )
            <tr>
                <th scope="row">{{ $tajs->firstItem()+$i }}</th>
                <td>{{ $taj->name }}</td>
                <td>{{ $taj->ketua_penitia }}</td>
                <td>
                    @if ($taj->status===1)
                        <span class="badge badge-success">Dibuka</span>
                    @else
                        <span class="badge badge-secondary">Ditutup</span>
                    @endif
                </td>
                <td>
                    @if ($taj->status===0)
                    <button wire:click='active({{ $taj->id }})' class="btn btn-success btn-sm">Aktifkan</button>
                    @else
                    <button wire:click='unactive({{ $taj->id }})' class="btn btn-secondary btn-sm">Non Aktifkan</button>
                    @endif
                    <button wire:click='edit({{ $taj->id }})' class="btn btn-warning btn-sm text-white"><i
                            class="fa-solid fa-edit"></i></button>
                    <button wire:click='deleting({{ $taj->id }})' class="btn btn-danger btn-sm text-white"><i
                            class="fa-solid fa-trash"></i></button>
                </td>
            </tr>
            @empty

            @endforelse
        </tbody>
    </table>
    {!! $tajs->links() !!}
</div> --}}

<div>
    <div class="row mb-3">
        {{-- <div class="col col-md-6">
            <a class="btn btn-success btn-sm" href="{{ route('category.create') }}"><i
                    class="fa-solid fa-circle-plus"></i>
                Kategori</a>
        </div>
        <div class="col-7 col-md-6">
            <input type="search" wire:model.live="search" class="form-control form-control-sm" placeholder="Cari...">
        </div> --}}
    </div>
    <div class="table-responsive">

        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Tahun Ajaran</th>
                    <th scope="col">Ketua Penitia</th>
                    <th scope="col">Status</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($tajs as $i=>$taj )
                <tr>
                    <th>
                        <img src="{{ asset('storage/brosurs/'.$taj->image) }}" class="img-fluid" width="200px">
                    </th>
                    <td>{{ $taj->name }}</td>
                    <td>{{ $taj->chief }}</td>
                    <td>
                        @if ($taj->status==1)
                        <span class="badge badge-success">Dibuka</span>
                        @else
                        <span class="badge badge-secondary">Ditutup</span>
                        @endif
                    </td>
                    <td>
                        @if ($taj->status==0)
                        <button wire:click='active({{ $taj->id }})' class="btn btn-light btn-sm">
                            <i class="fa-solid fa-toggle-off"></i>
                        </button>
                        @else
                        <button wire:click='unactive({{ $taj->id }})' class="btn btn-light btn-sm"><i class="fa-solid fa-toggle-on text-success text-lg"></i></button>
                        @endif
                        <button wire:click='edit({{ $taj->id }})' class="btn btn-warning btn-sm text-white"><i
                                class="fa-solid fa-edit"></i></button>
                        <button wire:click='deleting({{ $taj->id }})' class="btn btn-danger btn-sm text-white"><i
                                class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
                @empty

                @endforelse
            </tbody>
        </table>
        {!! $tajs->links() !!}
    </div>
</div>