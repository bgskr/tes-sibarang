<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="relative overflow-x-auto">
                        <div class="flex justify-around text-center">

                            <a href="#"
                                class="flex-initial w-64 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
                                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">Jumlah Jenis Barang
                                </h5>
                                <h1 class="mb-2 text-5xl font-bold tracking-tight text-gray-900">
                                    {{ $jenis }}
                                </h1>
                            </a>
                            <a href="#"
                                class="flex-initial w-64 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
                                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">Jumlah Barang</h5>
                                <h1 class="mb-2 text-5xl font-bold tracking-tight text-gray-900">
                                    {{ $barang }}
                                </h1>
                            </a>
                            <a href="#"
                                class="flex-initial w-64 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
                                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">Jumlah Users</h5>
                                <h1 class="mb-2 text-5xl font-bold tracking-tight text-gray-900">
                                    {{ $user }}
                                </h1>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
