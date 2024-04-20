<div>
    <div class="row my-5 px-2">
        <div class="col-md-8">
            <div class="d-flex mb-2 justify-content-end">
                <input type="search" wire:model.live='search' class="form-control form-control-sm col-5" placeholder="Search...">
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama Ekstra Kulikuler</th>
                        <th scope="col">Kategori Ekstra Kulikuler</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($lifesklills as $lifeskill)
                        <tr>
                            <th>
                                @if ($lifeskill->image)
                                <img src="{{ asset('storage/'.$lifeskill->image) }}" width="80" height="80" class="img-fluid">
                                @else
                                   <img src="https://placehold.co/400" width="80" height="80" class="img-fluid"> 
                                @endif
                            </th>
                            <td>{{ $lifeskill->name }}</td>
                            <td>{{ $lifeskill->category }}</td>
                            <td>{{ $lifeskill->deskripsi }}</td>
                            <td>
                                <div class="btn-group">
                                    <button wire:click='edit({{ $lifeskill->id }})' class="btn btn-sm btn-warning text-light"><i class="fa-solid fa-edit"></i></button>
                                    <button wire:click='deleting({{ $lifeskill->id }})' class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <form wire:submit='{{ $isEditing ? 'update':'submit' }}'>
                <div class="form-group">
                    <label for="name">Nama Ekstra Kulikuler</label>
                    <input type="text" class="form-control @error('name')
                        is-invalid
                    @enderror" id="name" wire:model='name'>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="category">Kategori Ekstra Kulikuler</label>
                    <select type="text" class="form-control @error('category')
                        is-invalid
                    @enderror" id="category" wire:model='category'>
                    <option class="text-light" value="">--</option>
                    <option value="fisik">Fisik</option>
                    <option value="nonfisik">Non fisik</option>
                    </select>
                    @error('category')
                        <small class="invalid-feedback"></small>
                    @enderror
                </div>
                 <div class="form-group">
                    <label for="deskripsi">Deskripsi Ekstra Kulikuler</label>
                    <textarea type="text" class="form-control @error('deskripsi')
                        is-invalid
                    @enderror" id="deskripsi" wire:model='deskripsi'></textarea>
                    @error('deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">Gambar</label>
                    <input type="file" class="form-control-file @error('image')
                        is-invalid
                    @enderror" id="image" wire:model='image'>
                    @error('image')
                        <small class="invalid-feedback">{{ $message }}</small>
                    @enderror
                </div>
                @if ($image)
                    <img src="{{ $image->temporaryUrl() }}" width="300">
                @else
                    <img src="{{ $imageOld }}" width="300">
                @endif
                <div class="btn-group float-right">
                    <button wire:click='cancel' type="button" class="btn btn-danger">Batal</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


