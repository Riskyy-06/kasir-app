<!-- resources/views/kategori/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kategori</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="p-4">
    <div class="container">
        <h2>Tambah Kategori</h2>

        <form action="{{ route('kategori.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nama Kategori</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <button class="btn btn-success">Simpan</button>
            <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
