<div class="row">
    <div class="col-md-7">
        <div class="row mb-3">
            <div class="col col-md-6">
                <a class="btn btn-success btn-sm" href="{{ route('guru.create') }}"><i
                        class="fa-solid fa-circle-plus"></i>
                    Tambah Guru</a>
            </div>
            <div class="col-7 col-md-6">
                <x-search></x-search>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Nama Guru</th>
                        <th>
                            Opsi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($teachers as $i=> $guru)
                    <tr>
                        <td>
                            @if ($guru->image)
                            <img src="{{ asset('storage/'.$guru->image) }}" class=" rounded-circle" width="50"
                                height="50">
                            @else
                            <img src="{{ asset('frontend/img/man-user.svg') }}" class=" rounded-circle" width="50" height="50">
                            @endif
                        </td>
                        <td>{{ $guru->name }}</td>
                        <td>
                            <div class="btn btn-group">
                                <x-btn-action href="{{ route('guru.show', $guru->slug) }}" color="success">
                                    {{ __('eye') }}
                                </x-btn-action>
                                <x-btn-action href="{{ route('guru.edit', $guru->slug) }}" color="warning">
                                    {{ __('edit') }}
                                </x-btn-action>
                                <x-btn-action model="deleting('{{ $guru->slug }}')" color="danger">
                                    {{ __('trash') }}
                                </x-btn-action>
                            </div>
                        </td>
                    </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
            {!! $teachers->links() !!}
        </div>
    </div>
    <x-image-draw></x-image-draw>
</div>