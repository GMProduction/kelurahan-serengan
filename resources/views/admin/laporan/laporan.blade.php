@extends('admin.base')

@section('morecss')
@endsection
@section('content')
    <div class="panel min-h-screen">

        <nav class="flex mb-6" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="/admin"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900  ">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                            </path>
                        </svg>
                        Laporan Pengajuan
                    </a>
                </li>

            </ol>
        </nav>



{{--        <div class="border rounded-lg p-2 flex gap-4 mb-8">--}}


{{--            <div>--}}
{{--                <label for="tanggalawal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal--}}
{{--                    Berlaku Awal</label>--}}
{{--                <div class="relative max-w-sm">--}}
{{--                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">--}}
{{--                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"--}}
{{--                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <path fill-rule="evenodd"--}}
{{--                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"--}}
{{--                                clip-rule="evenodd"></path>--}}
{{--                        </svg>--}}
{{--                    </div>--}}
{{--                    <input id="tanggalawal" datepicker datepicker-autohide datepicker-title="Flowbite datepicker"--}}
{{--                        type="text"--}}
{{--                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"--}}
{{--                        placeholder="Select date">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div>--}}
{{--                <div class="mb-9"></div>--}}
{{--                <a>-</a>--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <label for="tanggalakhir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal--}}
{{--                    Akhir</label>--}}
{{--                <div class="relative max-w-sm">--}}
{{--                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">--}}
{{--                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"--}}
{{--                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <path fill-rule="evenodd"--}}
{{--                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"--}}
{{--                                clip-rule="evenodd"></path>--}}
{{--                        </svg>--}}
{{--                    </div>--}}
{{--                    <input id="tanggalakhir" datepicker datepicker-autohide datepicker-title="Flowbite datepicker"--}}
{{--                        type="text"--}}
{{--                        class="bg-white  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"--}}
{{--                        placeholder="Select date">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div>--}}
{{--                <div class="mb-7"></div>--}}
{{--                <a class="block rounded-md bg-orange-500 hover:bg-orange-700 text-white font-bold text-center py-2 px-4"--}}
{{--                    href="/admin/laporan/cetak">--}}
{{--                    Cetak--}}
{{--                </a>--}}
{{--            </div>--}}

{{--        </div>--}}


        <p class="mb-2">Tabel Pengajuan Surat</p>
        <div class="border rounded-lg  ">
            <div class="relative overflow-x-auto rounded-lg">
                <table id="tabel" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                #
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nomor Surat
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Pemohon
                            </th>
                            <th scope="col" class="px-6 py-3">
                                No. KTP
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jenis Surat
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Keperluan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                1
                            </th>
                            <td class="px-6 py-4">
                                Tangal
                            </td>
                            <td class="px-6 py-4">
                                No
                            </td>
                            <td class="px-6 py-4">
                                Nama Pemohon
                            </td>
                            <td class="px-6 py-4">
                                No KTP
                            </td>
                            <td class="px-6 py-4">
                                Jenis Surat
                            </td>
                            <td class="px-6 py-4">
                                Keperluan
                            </td>
                            <td class="px-6 py-4">
                                Status
                            </td>

                        </tr>

                    </tbody>
                </table>
            </div>
        </div>





    </div>
@endsection

@section('morejs')
    <script src="{{ asset('js/admin/moment.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            showDatatableAdmin();
        })

        function showDatatableAdmin() {
            let colums = [
                {
                    className: "text-center",
                    orderable: false,
                    defaultContent: "",
                    searchable: false
                },
                {
                    data: 'created_at', name: 'created_at', render(data){
                        return moment(data).format('DD MMMM YYYY')
                    }
                },
                { data: 'no_surat', name: 'no_surat', render(data) {
                        return data ?? '-';
                    }},
                { data: 'user.nama', name: 'user.nama'},
                { data: 'user.warga.no_ktp', name: 'user.warga.no_ktp'},
                { data: 'jenis.nama', name: 'jenis.nama'},
                { data: 'keperluan', name: 'keperluan'},

                { data: 'status', name: 'status', render(data) {
                        return data == 1 ? 'Diterima' : data == 2 ? 'DItolak' : 'Menunggu';
                    }},
            ];

            datatable('tabel', '{{route('admin.laporan.datatable')}}', colums)
        }
    </script>
@endsection
