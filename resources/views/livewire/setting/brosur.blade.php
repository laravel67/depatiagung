<div>
    <form class="mt-3" wire:submit.prevent="submit">
        <div class="form-inline">
            <div class="form-group mb-2">
                <label for="name" class="sr-only">Tahun Ajaran</label>
                <input type="file" wire:model="images" multiple
                    class="form-control @error('images.*') is-invalid @enderror mr-3" id="name"
                    placeholder="Tahun Ajaran">
                @error('images.*')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success mb-2">Simpan</button>
        </div>
        <div class="mt-5">
            @if ($images)
            @foreach($images as $image)
            <img src="{{ $image->temporaryUrl() }}" width="700" class="img-fluid">
            @endforeach
            @endif
            @if ($oldImages)
            <div>
                @foreach($oldImages as $image)
                <img src="{{ asset('storage/' . $image) }}" width="700" class="img-fluid">
                @endforeach
            </div>
            @endif
        </div>
    </form>
</div>