<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Paket - Iconnet</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    @include('layouts.navdash')
    <div id="layoutSidenav">
        @include('layouts.sidenav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container mt-4">
                    <h1>Daftar Paket</h1>

                    {{-- Form Tambah Paket --}}
                    <form action="{{ route('produk_paket.store') }}" method="POST" class="mb-4">
                        @csrf
                        <div class="row g-2">
                            <div class="col-md-3">
                                <input type="text" name="nama_paket" class="form-control" placeholder="Nama Paket" required>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="kecepatan" class="form-control" placeholder="Kecepatan" required>
                            </div>
                            <div class="col-md-2">
                                <input type="number" name="harga" class="form-control" placeholder="Harga" required>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi">
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-success w-100">Tambah</button>
                            </div>
                        </div>
                    </form>

                    {{-- Tabel Paket --}}
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Paket</th>
                                <th>Kecepatan</th>
                                <th>Harga</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pakets as $paket)
                            <tr>
                                <form action="{{ route('produk_paket.update', $paket->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <td><input type="text" name="nama_paket" value="{{ $paket->nama_paket }}" class="form-control" required></td>
                                    <td><input type="text" name="kecepatan" value="{{ $paket->kecepatan }}" class="form-control" required></td>
                                    <td><input type="number" name="harga" value="{{ $paket->harga }}" class="form-control" required></td>
                                    <td><input type="text" name="deskripsi" value="{{ $paket->deskripsi }}" class="form-control"></td>
                                    <td class="d-flex">
                                        <button class="btn btn-warning btn-sm me-1">Update</button>
                                </form>
                                <form action="{{ route('produk_paket.destroy', $paket->id) }}" method="POST" onsubmit="return confirm('Yakin hapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </main>
            @include('layouts.footdash')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>

</body>

</html>