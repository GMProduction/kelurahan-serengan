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
                        Pengajuan
                    </a>
                </li>

            </ol>
        </nav>

        <div class="grid grid-cols-4 gap-4">
            <div class="col-span-3 ">
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
                                        Atas Nama
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
                                    <th scope="col" class="px-6 py-3">
                                        Aksi
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
                                        Nomor Surat
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
                                        Atas Nama
                                    </td>
                                    <td class="px-6 py-4">
                                        Keperluan
                                    </td>
                                    <td>
                                        <a class="py-2 px-3 rounded-lg bg-blue-500 hover:bg-blue-700 text-white"
                                            href="#">></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="border rounded-lg p-2 space-y-3">
                <form id="form" onsubmit="return storeData()">
                    @csrf
                    <input id="id" name="id" hidden>
                    <div class="mb-3">
                        <label for="nosurat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                            Surat</label>
                        <input type="text" name="username" id="nosurat" readonly
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Nomor Surat" required="">
                    </div>

                    <div class="mb-3">
                        <label for="persetujuan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Persetujuan</label>
                        <select id="persetujuan" required name="status"
                            class="bg-white  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">Pilih Persetujuan</option>
                            <option value="1">Disetujui</option>
                            <option value="2">Tidak disetujui</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="tanggalawal"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                            Berlaku Awal</label>
                        <div class="relative max-w-sm">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input id="tanggalawal" datepicker datepicker-autohide datepicker-title="Flowbite datepicker"
                                type="text" name="tanggal_awal"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Select date">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="tanggalakhir"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                            Berlaku Akhir</label>
                        <div class="relative max-w-sm">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input id="tanggalakhir" datepicker datepicker-autohide datepicker-title="Flowbite datepicker"
                                type="text" name="tanggal_akhir"
                                class="bg-white  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Select date">
                        </div>
                    </div>
                    <div class="mb-3">

                        <label for="keterangan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                        <textarea id="keterangan" rows="4" name="keterangan"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-white  rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Masukan Keterangan disini..."></textarea>

                    </div>

                    <div class="flex justify-between gap-2 mt-3 hidden" id="btnConfirm">
                        <button type="submit"
                            class="block rounded-md bg-blue-500 hover:bg-blue-700 text-white font-bold text-center py-3 w-full">
                            Simpan
                        </button>
                        <a onclick="clearForm()"
                            class="block rounded-md bg-red-500 hover:bg-red-700 text-white font-bold text-center py-3 w-full">
                            Clear
                        </a>
                    </div>
                    <div class="flex justify-between gap-2 mt-3 hidden" id="btnCetak">
                        <a type="submit" id="cetakBtn"
                            class="block rounded-md bg-green-500 hover:bg-green-700 text-white font-bold text-center py-3 w-full">
                            Cetak
                        </a>
                        <a onclick="clearForm()"
                            class="block rounded-md bg-red-500 hover:bg-red-700 text-white font-bold text-center py-3 w-full">
                            Clear
                        </a>
                    </div>
                </form>
            </div>
        </div>



    </div>
@endsection

@section('morejs')
    <script src="{{ asset('js/admin/moment.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            showDatatableAdmin();
        })

        function showDatatableAdmin() {
            let colums = [{
                    className: "text-center",
                    orderable: false,
                    defaultContent: "",
                    searchable: false
                },
                {
                    data: 'created_at',
                    name: 'created_at',
                    render(data) {
                        return moment(data).format('DD MMMM YYYY')
                    }
                },
                {
                    data: 'no_surat',
                    name: 'no_surat',
                    render(data) {
                        return data ?? '-';
                    }
                },
                {
                    data: 'user.nama',
                    name: 'user.nama'
                },
                {
                    data: 'user.warga.no_ktp',
                    name: 'user.warga.no_ktp'
                },
                {
                    data: 'jenis.nama',
                    name: 'jenis.nama'
                },
                {
                    data: 'keperluan',
                    name: 'keperluan'
                },

                {
                    data: 'status',
                    name: 'status',
                    render(data) {
                        return data == 1 ? 'Diterima' : data == 2 ? 'DItolak' : 'Menunggu';
                    }
                },
                {
                    className: "text-center",
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ];

            datatable('tabel', '{{ route('admin.pengajuan.datatable') }}', colums)
        }

        $(document).on('click', '#detailData', function() {
            $('#form #id').val($(this).data('id'));
            $('#form #tanggalawal').val($(this).data('start'));
            $('#form #tanggalakhir').val($(this).data('end'));
            $('#form #keterangan').val($(this).data('keterangan'));
            $('#form #persetujuan').val($(this).data('status') == 0 ? '' : $(this).data('status'));
            $('#form #nosurat').val($(this).data('no'));
            if ($(this).data('status') == 0) {
                $('#btnConfirm').removeClass('hidden');
            } else if ($(this).data('status') == 1) {
                $('#btnCetak').removeClass('hidden');
            }
        })

        function storeData() {
            confirmSave('Simpan pengajuan', 'Apa anda yakin ?', 'form', '{{ route('admin.pengajuan') }}', afterSave);
            return false;
        }

        function afterSave() {
            clearForm();
            $('#tabel').DataTable().ajax.reload();
        }

        function clearForm() {
            $('#id').val('');
            $('#nosurat').val('');
            $('#persetujuan').val('');
            $('#tanggalawal').val('');
            $('#tanggalakhir').val('');
            $('#keterangan').val('');
            $('#btnConfirm').addClass('hidden');
            $('#btnCetak').addClass('hidden');
        }

        $(document).on('click', '#cetakBtn', function() {
            let url = '{{ route('admin.pengajuan.cetak') }}';
            url += '?id=' + $('#form #id').val();
            $(this).attr('href', url).attr('target', '_blank')
        })
    </script>
@endsection
