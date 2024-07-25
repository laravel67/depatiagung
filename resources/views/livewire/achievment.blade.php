<div class="row">
    <div class="col-md-7">
        <div class="row mb-3">
            <div class="col col-md-6">
                <a class="btn btn-success btn-sm" href="{{ route('prestasi.create') }}"><i
                        class="fa-solid fa-circle-plus"></i>
                    Tambah Achievment</a>
            </div>
            <div class="col-7 col-md-6">
                <x-search/>           
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Nama Achievment</th>
                        <th>Kategori</th>
                        <th>
                            Opsi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($achievments as $i=> $achievment)
                    <tr class=" ">
                        <td>
                            @if ($achievment->image)
                            <img src="{{ asset('storage/'.$achievment->image) }}" class=" rounded-circle" width="50"
                                height="50">
                            @else
                            <img class="rounded-circle"
                                src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                alt="Generic placeholder image" width="50" height="50">
                            @endif
                        </td>
                        <td>{{ $achievment->title }}</td>
                        <td>{{ $achievment->category }}</td>
                        <td>
                            <div class="btn btn-group">
                                <x-btn-action href="{{ route('prestasi.show', $achievment->slug) }}" color="success">
                                    {{ __('eye') }}
                                </x-btn-action>
                                <x-btn-action href="{{ route('prestasi.edit', $achievment->slug) }}" color="warning">
                                    {{ __('edit') }}
                                </x-btn-action>
                                <x-btn-action model="deleting('{{ $achievment->slug }}')" color="danger">
                                    {{ __('trash') }}
                                </x-btn-action>
                            </div>
                        </td>
                    </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
            {!! $achievments->links() !!}
        </div>
    </div>
    <x-image-draw/>
</div>