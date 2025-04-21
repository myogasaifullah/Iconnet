@if(isset($banners) && $banners->count() > 0)
<div id="bannerCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
    
    <!-- Indikator navigasi -->
    <div class="carousel-indicators">
        @foreach($banners as $index => $banner)
            <button type="button"
                data-bs-target="#bannerCarousel"
                data-bs-slide-to="{{ $index }}"
                class="{{ $index === 0 ? 'active' : '' }}"
                aria-current="{{ $index === 0 ? 'true' : 'false' }}"
                aria-label="Slide {{ $index + 1 }}">
            </button>
        @endforeach
    </div>

    <div class="carousel-inner">
        @foreach($banners as $index => $banner)
        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
            <img src="{{ asset('storage/' . $banner->gambar) }}" class="d-block w-100 rounded shadow-sm" alt="Banner {{ $index + 1 }}">
        </div>
        @endforeach
    </div>

    <!-- Tombol navigasi -->
    <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
        <span class="d-flex align-items-center justify-content-center bg-dark rounded-circle p-3 shadow" aria-hidden="true" style="opacity: 0.5;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-chevron-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
            </svg>
        </span>
        <span class="visually-hidden">Sebelumnya</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
        <span class="d-flex align-items-center justify-content-center bg-dark rounded-circle p-3 shadow" aria-hidden="true" style="opacity: 0.5;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
            </svg>
        </span>
        <span class="visually-hidden">Selanjutnya</span>
    </button>
</div>
@else
<p class="text-muted">Belum ada banner untuk ditampilkan.</p>
@endif
