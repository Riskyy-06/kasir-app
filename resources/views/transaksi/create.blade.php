<!-- resources/views/transaksi/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Transaksi Baru</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script>
        function hitungTotal() {
            let jumlahInputs = document.querySelectorAll('.jumlah');
            let hargaInputs = document.querySelectorAll('.harga');
            let total = 0;

            jumlahInputs.forEach((input, index) => {
                let qty = parseInt(input.value || 0);
                let harga = parseInt(hargaInputs[index].value || 0);
                total += qty * harga;
            });

            document.getElementById('total').innerText = 'Rp ' + total.toLocaleString('id-ID');
            document.getElementById('inputTotal').value = total;
        }
    </script>
</head>
<body class="p-4">
<div class="container">
    <h2>Transaksi Baru</h2>

    <form action="{{ route('transaksi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control" required>
        </div>

        <h5>Produk</h5>
        @foreach($produks as $produk)
        <div class="row mb-2">
            <div class="col-md-4">
                <strong>{{ $produk->nama }}</strong>
                <input type="hidden" name="produk_id[]" value="{{ $produk->id }}">
                <input type="hidden" class="harga" value="{{ $produk->harga }}">
            </div>
            <div class="col-md-4">
                <input type="number" name="jumlah[]" class="form-control jumlah" placeholder="Qty" oninput="hitungTotal()">
            </div>
        </div>
        @endforeach

        <div class="mb-3">
            <label>Total:</label>
            <div id="total">Rp 0</div>
            <input type="hidden" name="total" id="inputTotal">
        </div>

        <button class="btn btn-success">Simpan Transaksi</button>
    </form>
</div>
</body>
</html>
