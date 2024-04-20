<div>
    <form class="mt-3" wire:submit.prevent="submit">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="slug">Tulis Sambutan Pimpinan PPS Depati Agung</label>
                    <input id="body" type="hidden" class="@error('body') is-invalid @enderror" wire:model='body' value="{{ $body }}">
                    <trix-editor input="body" wire:model='body'></trix-editor>
                    @error('body')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">Foto/Gambar</label>
                    <input type="file" wire:model="image" class="form-control-file @error('image') is-invalid @enderror mr-3"
                        id="image">
                    @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success mb-2 col-md-12">Simpan</button>
            </div>
            <div class="col-md-6">
                @if ($image)
                <img src="{{ $image->temporaryUrl() }}" width="300" class="img-fluid">
                @elseif ($oldImage)
                <img src="{{ asset('storage/' . $oldImage) }}" width="300" class="img-fluid">
                @endif
            </div>
        </div>
    </form>
</div>