<div>
    <div class="row mb-3">
        <div class="col">
            <a class="btn btn-success btn-sm" href="{{ route('apost.create') }}"><i class="fa-solid fa-circle-plus"></i>
                Post</a>
        </div>
        <div class="col-md">
            <input type="search" wire:model.live="search" class="form-control form-control-sm"
                placeholder="Cari judul,kategori,dan author...">
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Kategory</th>
                    @can('admin')
                    <th>Autho</th>
                    @endcan
                    <th>Dibuat</th>
                    <th>
                        Opsi
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $i=> $post)
                <tr>
                    <td>{{ $posts->firstItem()+$i }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->name }}</td>
                    @can('admin')
                    <td>{{ $post->author->name }}</td>
                    @endcan
                    <td>
                        {{
                        \Carbon\Carbon::parse($post->created_at)->locale('id')->translatedFormat('d F
                        Y')}}
                    </td>
                    <td>
                        <div class="btn btn-group">
                            <a href="{{ route('apost.show', $post->slug) }}" class="btn btn-sm btn-success"><i
                                    class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('apost.edit', $post->slug) }}"
                                class="btn btn-sm btn-warning text-white"><i class="fa-solid fa-edit"></i></a>
                            <button wire:click.prevent='deleting("{{ $post->slug }}")'
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
        {!! $posts->links() !!}
    </div>
</div>