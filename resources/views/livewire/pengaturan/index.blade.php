<div>
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-sambutan-tab" data-toggle="tab" data-target="#nav-sambutan" type="button"
                role="tab" aria-controls="nav-sambutan" aria-selected="true">Sambutan</button>
            <button class="nav-link" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile" type="button"
                role="tab" aria-controls="nav-profile" aria-selected="false">Galeri</button>
            <button class="nav-link" id="nav-acara-tab" data-toggle="tab" data-target="#nav-acara" type="button"
                role="tab" aria-controls="nav-acara" aria-selected="false">Jadwal Acara</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-sambutan" role="tabpanel" aria-labelledby="nav-sambutan-tab">
            @livewire('pengaturan.sambutan')
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            @livewire('pengaturan.galeri')
        </div>
        <div class="tab-pane fade" id="nav-acara" role="tabpanel" aria-labelledby="nav-acara-tab">
            @livewire('pengaturan.acara')
        </div>
    </div>
</div>
