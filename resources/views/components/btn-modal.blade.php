@props(['id'=> ''])
<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#{{ $id }}">
    Import {{ $slot }}
</button>