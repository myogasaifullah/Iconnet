@if(isset($banners) && $banners->count() > 0)
<div id="bannerCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach($banners as $index => $banner)
        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
            <img src="{{ asset('storage/' . $banner->gambar) }}" class="d-block w-100 rounded shadow-sm" alt="Banner {{ $index + 1 }}">
        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Sebelumnya</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Selanjutnya</span>
    </button>
</div>
@else
<p class="text-muted">Belum ada banner untuk ditampilkan.</p>
@endif