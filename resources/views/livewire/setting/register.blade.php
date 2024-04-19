<div>
    <form class="form-inline mt-3" wire:submit.prevent="{{ $isEditing ? 'update' : 'store' }}">
        <div class="form-group mb-2">
            <label for="name" class="sr-only">Tahun Ajaran</label>
            <input type="text" wire:model.lazy="name" class="form-control @error('name') is-invalid @enderror" id="name"
                placeholder="Tahun Ajaran">
            @error('name')
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
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tajs as $i=>$taj )
            <tr>
                <th scope="row">{{ $tajs->firstItem()+$i }}</th>
                <td>{{ $taj->name }}</td>
                <td>
                    @if ($taj->status===0)
                    <button wire:click='active({{ $taj->id }})' class="btn btn-success btn-sm">Aktifkan</button>
                    @else
                    <button wire:click='unactive({{ $taj->id }})' class="btn btn-secondary btn-sm">Non Aktifkan</button>
                    @endif
                    <button wire:click='edit({{ $taj->id }})' class="btn btn-warning btn-sm text-white"><i
                            class="fa-solid fa-edit"></i></button>
                    <button wire:click="delete({{ $taj->id }})"
                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                        class="btn btn-danger btn-sm">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </td>
            </tr>
            @empty

            @endforelse
        </tbody>
    </table>
    {!! $tajs->links() !!}
</div>