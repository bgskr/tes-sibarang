<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
                @include('Admin.barang.create')

                <div class="p-6 text-gray-900">
                    <div class="relative overflow-x-auto">

                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Nama
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Jenis Barang
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Harga
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Stok
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $barang)
                                    <tr
                                        class="odd:bg-white even:bg-gray-50  border-b ">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                            {{$barang->nama_barang}}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{$barang->jenisBarang->nama_jenis_barang}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$barang->harga}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$barang->stok}}
                                        </td>
                                        <td scope="row" class="px-6 py-4">
                                            @include('Admin.barang.update')
                                            @include('Admin.barang.delete')
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
