<!-- resources/views/kategori/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Kategori</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="p-4">
    <div class="container">
        <h2>Edit Kategori</h2>

        <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Nama Kategori</label>
                <input type="text" name="nama" value="{{ $kategori->nama }}" class="form-control" required>
            </div>
            <button class="btn btn-primary">Update</button>
            <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
