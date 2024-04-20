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
            @if($images)
            @foreach($images as $image)
            @if (Str::startsWith($image->getMimeType(), 'image/'))
            <img src="{{ $image->temporaryUrl() }}" width="700" class="img-fluid">
            @else
            <div class="text-danger">File with extension "{{ $image->getClientOriginalExtension() }}" is not a valid image.</div>
            @endif
            @endforeach
            @endif
        
            @if($oldImages)
            @foreach($oldImages as $image)
            <img src="{{ asset('storage/' . $image) }}" width="700" class="img-fluid">
            @endforeach
            @endif
        </div>
    </form>
</div>