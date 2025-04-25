<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard Kasir
        </h2>
    </x-slot>

    <div class="py-8 px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="bg-white p-4 shadow rounded-lg">
                <h3 class="text-lg font-semibold">Total Produk</h3>
                <p class="text-2xl">{{ $totalProduk }}</p>
            </div>
            <div class="bg-white p-4 shadow rounded-lg">
                <h3 class="text-lg font-semibold">Total Kategori</h3>
                <p class="text-2xl">{{ $totalKategori }}</p>
            </div>
            <div class="bg-white p-4 shadow rounded-lg">
                <h3 class="text-lg font-semibold">Total Transaksi</h3>
                <p class="text-2xl">{{ $totalTransaksi }}</p>
            </div>
            <div class="bg-white p-4 shadow rounded-lg">
                <h3 class="text-lg font-semibold">Penjualan Hari Ini</h3>
                <p class="text-2xl">Rp{{ number_format($totalHariIni, 0, ',', '.') }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
