<div class="my-5">
    <form class="my-3" wire:submit.prevent='submit'>
        <div class="form-inline">
            <input type="file" name="image" id="image" wire:model='image' multiple>
            <button type="submit" class="btn btn-sm btn-success"><i class="fa-solid fa-upload"></i> Upload</button>
        </div>
        @if ($image)
            @foreach($image as $img)
                <img src="{{ $img->temporaryUrl() }}" width="150" class="img-fluid mt-2">
            @endforeach
        @endif
    </form>
    <div class="row">
        @forelse ($images as $image)
            <div class="col-md-3">
                <div class="card mb-4">
                    <img class="card-img-top" src="{{ asset('storage/'.$image->image) }}"
                        style="height: 225px; width: 100%; display: block;">
                    <div class="card-body">
                        <div class="btn-group text-right">
                            <button type="button" class="btn btn-sm btn-secondary"><i class="fa-solid fa-eye"></i></button>
                            <button wire:click='deleting({{ $image->id }})' type="button" class="btn btn-sm btn-outline-danger"><i
                                    class="fa-solid fa-trash"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            
        @endforelse
    </div>
</div>