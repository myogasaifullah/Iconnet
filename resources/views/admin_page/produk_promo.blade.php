<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Promo Internet - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    @include('layouts.navdash')
    <div id="layoutSidenav">
        @include('layouts.sidenav')
        <div id="layoutSidenav_content">
            <main class="container mt-4">
                <h1 class="mb-4 fw-bold text-primary">Promo Internet</h1>

                {{-- Notifikasi Sukses --}}
                @if(session('success'))
                <div class="alert alert-success shadow-sm">{{ session('success') }}</div>
                @endif

                {{-- Form Tambah Promo --}}
                <div class="card shadow-sm mb-4 border-0">
                    <div class="card-header bg-white fw-semibold">Tambah Promo Baru</div>
                    <div class="card-body">
                        <form action="{{ route('promo.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="judul" class="form-label fw-semibold">Judul Promo</label>
                                <input type="text" name="judul" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label fw-semibold">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" rows="3" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="gambar" class="form-label fw-semibold">Gambar</label>
                                <input type="file" name="gambar" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah Promo</button>
                        </form>
                    </div>
                </div>

                {{-- Daftar Promo --}}
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white fw-semibold">Daftar Promo</div>
                    <div class="card-body table-responsive">
                        <table class="table align-middle table-bordered table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Gambar</th>
                                    <th style="width: 250px;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($promos as $promo)
                                <tr>
                                    <td>{{ $promo->judul }}</td>
                                    <td>{{ $promo->deskripsi }}</td>
                                    <td><img src="{{ asset('storage/' . $promo->gambar) }}" width="100" class="rounded shadow-sm" alt="gambar promo"></td>
                                    <td>
                                        {{-- Form Edit --}}
                                        <form action="{{ route('promo.update', $promo->id) }}" method="POST" enctype="multipart/form-data" class="mb-2">
                                            @csrf
                                            @method('PUT')
                                            <input type="text" name="judul" value="{{ $promo->judul }}" class="form-control mb-1" required>
                                            <textarea name="deskripsi" class="form-control mb-1" required>{{ $promo->deskripsi }}</textarea>
                                            <input type="file" name="gambar" class="form-control mb-2">
                                            <button class="btn btn-warning btn-sm w-100"><i class="fas fa-edit"></i> Update</button>
                                        </form>

                                        {{-- Tombol Hapus --}}
                                        <form action="{{ route('promo.destroy', $promo->id) }}" method="POST" onsubmit="return confirm('Yakin hapus promo ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm w-100"><i class="fas fa-trash"></i> Hapus</button>
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
            </main>
            @include('layouts.footdash')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>