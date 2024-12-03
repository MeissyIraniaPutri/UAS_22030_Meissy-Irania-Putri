<div>
    <!-- Form -->
    <form wire:submit.prevent="save" class="space-y-4">
        <div>
            <label for="npm" class="block text-sm font-medium text-gray-700">NPM:</label>
            <input type="text" id="npm" wire:model="npm" required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>
        <div>
            <label for="nama" class="block text-sm font-medium text-gray-700">Nama:</label>
            <input type="text" id="nama" wire:model="nama" required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>
        <div>
            <label for="prodi" class="block text-sm font-medium text-gray-700">Prodi:</label>
            <input type="text" id="prodi" wire:model="prodi" required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>
        <div>
            <button type="submit"
                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Simpan
            </button>
        </div>
    </form>

    <!-- Data Mahasiswa -->
    <div class="mt-6">
        <h3 class="text-lg font-medium text-gray-900">Daftar Mahasiswa</h3>
        <table class="min-w-full divide-y divide-gray-200 mt-4">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NPM</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Prodi</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($mahasiswa as $mahasiswa)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $mahasiswa->npm }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $mahasiswa->nama }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $mahasiswa->prodi }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        <button wire:click="delete({{ $mahasiswa->id }})" class="bg-red-500 text-white px-2 py-1 rounded-md hover:bg-red-600"
                            style="background-color: red; color: white; padding: 5px 10px; border-radius: 5px;">>
                            Hapus
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Export Buttons -->
    <div class="mt-4 flex space-x-4">
        <button wire:click="exportExcel"
            class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600"
            style="background-color: red; color: white; padding: 5px 10px; border-radius: 5px;">>
            Export Excel
        </button>
        <button wire:click="exportPDF"
            class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600"
            style="background-color: red; color: white; padding: 5px 10px; border-radius: 5px;">>
            Export PDF
        </button>
    </div>
</div>