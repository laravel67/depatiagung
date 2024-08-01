<form class="row mx-md-4 mx-2 mb-5" wire:submit='store'>
    @foreach ($bidang as $index => $row)
    <div class="col-md-6 border mb-3 p-3">
        <label for="name{{ $index }}"><strong>{{ $row->name }}</strong></label>
        <div class="input-group mb-3">
            <input type="hidden" wire:model="idbidang.{{ $index }}" value="{{ $row->id }}">
            <input type="text" wire:model="nameOrang.{{ $index }}" id="name" class="form-control"
                placeholder="Nama Lengkap">
            <div class="input-group-append">
                <label for="image{{ $index }}" class="input-group-text btn" id="basic-addon2">
                    <i class="fa-solid fa-paperclip"></i> Foto
                </label>
                <input type="file" wire:model="image.{{ $index }}" id="image{{ $index }}" class="d-none"
                    accept="image/*">
            </div>
        </div>
        @if (isset($image[$index]))
        <img src="{{ $image[$index]->temporaryUrl() }}" class="mt-3 img-fluid" width="100">
        @elseif ($oldImage)
        <img src="{{ asset('storage/strukturs/'.$oldImage[$index]) }}" class="mt-3 img-fluid" width="100">
        @else
        <img src="{{ asset('frontend/img/user.svg') }}" class="mt-3 img-fluid" width="100">
        @endif
    </div>
    @endforeach
    <button type="submit" class="btn btn-success">Simpan Struktur</button>
</form>
