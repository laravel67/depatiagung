<div class="row my-5 px-3">
    <div class="col-md-6">
        <div class="d-flex mb-2 justify-content-between">
            <div>
                <x-btn-modal id="importBidang">Bidang</x-btn-modal>
                <x-modal-import subTitle="Import Bidang" id="importBidang">
                    <form action="{{ route('import.bidang') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <x-input-import name="bidang">Pilih file Excel</x-input-import>
                        <x-btn-import />
                    </form>
                </x-modal-import>
            </div>
            <input type="search" wire:model.live='search' class="form-control form-control-sm col-5" placeholder="Search...">
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Bidang</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($bidang as $index=> $row)
                <tr>
                    <td>{{ $bidang->firstItem()+$index }}</td>
                    <td>{{ $row->name }}</td>
                    <td>
                        <div class="btn-group">
                            <button wire:click='edit({{ $row->id }})' class="btn btn-sm btn-warning text-light"><i
                                    class="fa-solid fa-edit"></i></button>
                            <button wire:click='deleting({{ $row->id }})' class="btn btn-sm btn-danger"><i
                                    class="fa-solid fa-trash"></i></button>
                        </div>
                    </td>
                </tr>
                @empty
                @endforelse
            </tbody>
        </table>
        {{ $bidang->links() }}
    </div>
    <div class="col-md-4">
        <h3 class="card-title">{{ !$isEditing ? 'Tambah Bidang':'Ubah Bidang' }}</h3>
        <form wire:submit='{{ $isEditing ? ' update':'store' }}'>
            <div class="form-group">
                <label for="name">Nama Bidang</label>
                <input type="text" class="form-control @error('name')
                                is-invalid
                            @enderror" id="name" wire:model='name'>
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="btn-group float-right">
                <button wire:click='cancel' type="button" class="btn btn-danger">Batal</button>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
</div>