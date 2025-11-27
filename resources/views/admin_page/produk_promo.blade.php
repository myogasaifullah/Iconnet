<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Iconnet</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    @include('layouts.navdash')
    <div id="layoutSidenav">
        @include('layouts.sidenav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4 text-primary">Manajemen Promo Internet</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">CRUD Promo</li>
                    </ol>

                    {{-- Notifikasi Sukses --}}
                    @if(session('success'))
                    <div class="alert alert-success shadow-sm">{{ session('success') }}</div>
                    @endif

                    {{-- Form Tambah Promo --}}
                    <div class="card mb-4 border-0 glass-card">
                        <div class="card-header fw-semibold bg-white">Tambah Promo Baru</div>
                        <div class="card-body">
                            <form action="{{ route('promo.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Judul Promo</label>
                                    <input type="text" name="judul" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Deskripsi</label>
                                    <textarea name="deskripsi" class="form-control" rows="3" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Gambar</label>
                                    <input type="file" name="gambar" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fas fa-plus me-1"></i>Tambah Promo</button>
                            </form>
                        </div>
                    </div>

                    {{-- Tabel Promo --}}
                    <div class="card mb-4 border-0 glass-card">
                        <div class="card-header fw-semibold bg-white">Daftar Promo Internet</div>
                        <div class="card-body table-responsive">
                            <table class="table align-middle table-bordered table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Gambar</th>
                                        <th style="width: 260px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($promos as $promo)
                                    <tr>
                                        <td>{{ $promo->judul }}</td>
                                        <td>{{ $promo->deskripsi }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $promo->gambar) }}" width="100" class="rounded shadow-sm" alt="gambar promo">
                                        </td>
                                        <td>
                                            <form action="{{ route('promo.update', $promo->id) }}" method="POST" enctype="multipart/form-data" class="mb-2">
                                                @csrf
                                                @method('PUT')
                                                <input type="text" name="judul" value="{{ $promo->judul }}" class="form-control mb-1" required>
                                                <textarea name="deskripsi" class="form-control mb-1" required>{{ $promo->deskripsi }}</textarea>
                                                <input type="file" name="gambar" class="form-control mb-2">
                                                <button class="btn btn-warning btn-sm w-100">
                                                    <i class="fas fa-edit me-1"></i> Update
                                                </button>
                                            </form>
                                            <form action="{{ route('promo.destroy', $promo->id) }}" method="POST" onsubmit="return confirm('Yakin hapus promo ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm w-100">
                                                    <i class="fas fa-trash me-1"></i> Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center text-muted">Belum ada promo.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
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
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
</body>

</html>