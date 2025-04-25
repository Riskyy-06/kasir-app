<!DOCTYPE html>
<html>
<head>
    <title>Daftar Transaksi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="p-4">
<div class="container">
    <h2>Daftar Transaksi</h2>
    <a href="{{ route('transaksi.create') }}" class="btn btn-primary mb-3">+ Transaksi Baru</a>

    @foreach($transaksis as $transaksi)
    <div class="card mb-3">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div>
                <strong>Tanggal:</strong> {{ $transaksi->tanggal }} |
                <strong>Total:</strong> Rp{{ number_format($transaksi->total, 0, ',', '.') }}
            </div>
            <form action="{{ route('transaksi.destroy', $transaksi->id) }}" method="POST" onsubmit="return confirm('Yakin hapus transaksi ini?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger">Hapus</button>
            </form>
        </div>
        
        <div class="card-body p-2">
            <table class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transaksi->details as $detail)
                    <tr>
                        <td>{{ $detail->produk->nama }}</td>
                        <td>{{ $detail->jumlah }}</td>
                        <td>Rp{{ number_format($detail->produk->harga, 0, ',', '.') }}</td>
                        <td>Rp{{ number_format($detail->subtotal, 0, ',', '.') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endforeach
</div>
</body>
</html>
