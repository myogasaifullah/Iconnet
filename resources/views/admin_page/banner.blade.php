<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Iconnet</title>
      <!-- Favicon-->
      <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    @include('layouts.navdash')
    <div id="layoutSidenav">
        @include('layouts.sidenav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Manajemen Banner</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">CRUD Banner</li>
                    </ol>

                    {{-- Notifikasi Sukses --}}
                    @if(session('success'))
                    <div class="alert alert-success shadow-sm">{{ session('success') }}</div>
                    @endif

                    {{-- Form Tambah / Edit --}}
                    <div class="card mb-4 border-0 glass-card">
                        <div class="card-header">
                            {{ isset($editBanner) ? 'Edit Banner' : 'Tambah Banner' }}
                        </div>
                        <div class="card-body">
                            <form action="{{ isset($editBanner) ? route('banner.update', $editBanner->id) : route('banner.store') }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                @if(isset($editBanner))
                                @method('PUT')
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Gambar Saat Ini:</label><br>
                                    <img src="{{ asset('storage/' . $editBanner->gambar) }}" width="200" class="rounded shadow-sm">
                                </div>
                                @endif

                                <div class="mb-3">
                                    <label for="gambar" class="form-label fw-semibold">Pilih Gambar Banner</label>
                                    <input type="file" name="gambar" class="form-control" {{ isset($editBanner) ? '' : 'required' }}>
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    {{ isset($editBanner) ? 'Update Banner' : 'Tambah Banner' }}
                                </button>
                                @if(isset($editBanner))
                                <a href="{{ route('banner.index') }}" class="btn btn-secondary ms-2">Batal</a>
                                @endif
                            </form>
                        </div>
                    </div>

                    {{-- Daftar Banner --}}
                    <div class="card mb-4 border-0 glass-card">
                        <div class="card-header">
                            Daftar Banner
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table align-middle table-bordered table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Gambar</th>
                                            <th style="width: 160px;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($banners as $banner)
                                        <tr>
                                            <td>
                                                <img src="{{ asset('storage/' . $banner->gambar) }}" width="200" class="rounded shadow-sm">
                                            </td>
                                            <td>
                                                <a href="{{ route('banner.index', ['edit' => $banner->id]) }}" class="btn btn-warning btn-sm me-1">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <form action="{{ route('banner.destroy', $banner->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus banner ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash"></i> Hapus
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="2" class="text-center text-muted">Belum ada banner.</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
            @include('layouts.footdash')
        </div>
    </div>

    {{-- Script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>