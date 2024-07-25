<div class="row">
    <div class="col-md-7">
        <div class="row mb-3">
            <div class="col col-md-6">
                <a class="btn btn-success btn-sm" href="{{ route('mapel.create') }}"><i
                        class="fa-solid fa-circle-plus"></i>
                    Mapel</a>
            </div>
            <div class="col-7 col-md-6">
                <x-search></x-search>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Mata Pelajaran</th>
                        <th>Slug Mapel</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($mapels as $i=> $mapel)
                    <tr>
                        <td>{{ $mapels->firstItem()+$i }}</td>
                        <td>{{ $mapel->name }}</td>
                        <td>{{ $mapel->slug }}</td>
                        <td>
                            <div class="btn btn-group">
                                <x-btn-action href="{{ route('mapel.edit', $mapel->slug) }}" color="warning">
                                    {{ __('edit') }}
                                </x-btn-action>
                                <x-btn-action model="deleting('{{ $mapel->slug }}')" color="danger">
                                    {{ __('trash') }}
                                </x-btn-action>
                            </div>
                        </td>
                    </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
            {!! $mapels->links() !!}
        </div>
    </div>
    <x-image-draw></x-image-draw>
</div>