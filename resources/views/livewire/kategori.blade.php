<div class="row">
    <div class="col-md-7">
        <div class="row mb-3">
            <div class="col col-md-6">
                <a class="btn btn-success btn-sm" href="{{ route('category.create') }}"><i
                        class="fa-solid fa-circle-plus"></i>
                    Kategori</a>
            </div>
            <div class="col-7 col-md-6">
                <input type="search" wire:model.live="search" class="form-control form-control-sm"
                    placeholder="Cari...">
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Kategori</th>
                        <th>Slug Kategory</th>
                        <th>
                            Opsi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $i=> $category)
                    <tr>
                        <td>{{ $categories->firstItem()+$i }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>
                            <div class="btn btn-group">
                                <a href="{{ route('category.edit', $category->slug) }}"
                                    class="btn btn-sm btn-warning text-white"><i class="fa-solid fa-edit"></i></a>
                                <button wire:click.prevent='deleting("{{ $category->slug }}")'
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
            {!! $categories->links() !!}
        </div>
    </div>
    <div class="col-md-3 d-none d-md-flex">
        <img src="{{ asset('backend/img/undraw_designer_girl_re_h54c.svg') }}" class="img-fluid">
    </div>
</div>