<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Promo Internet - Admin</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>

<body class="sb-nav-fixed">
    @include('layouts.navdash')
    <div id="layoutSidenav">
        @include('layouts.sidenav')
        <div id="layoutSidenav_content">
            <main class="container mt-4">
                <h1>Promo Internet</h1>

                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                {{-- Form Tambah Promo --}}
                <form action="{{ route('promo.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Promo</label>
                        <input type="text" name="judul" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" name="gambar" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Promo</button>
                </form>

                {{-- Daftar Promo --}}
                <hr>
                <h3>Daftar Promo</h3>
                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($promos as $promo)
                        <tr>
                            <td>{{ $promo->judul }}</td>
                            <td>{{ $promo->deskripsi }}</td>
                            <td><img src="{{ asset('storage/' . $promo->gambar) }}" width="100" alt=""></td>
                            <td>
                                <form action="{{ route('promo.destroy', $promo->id) }}" method="POST" onsubmit="return confirm('Yakin hapus promo ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </main>
            @include('layouts.footdash')
        </div>
    </div>
</body>

</html>