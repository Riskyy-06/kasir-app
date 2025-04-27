<x-app-layout>
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight mb-6">
                Daftar Kategori
            </h2>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="flex justify-end mb-4">
                    <a href="{{ route('kategori.create') }}" 
                       class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                        Tambah Kategori
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nama
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($kategoris as $item)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $item->nama }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap flex space-x-2">
                                        <a href="{{ route('kategori.edit', $item->id) }}" 
                                           class="text-indigo-600 hover:text-indigo-900">
                                            ✏️
                                        </a>
                                        <form action="{{ route('kategori.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900">
                                                🗑️
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>