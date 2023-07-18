@extends('warga.base')

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
            <div class="border rounded-lg p-2 space-y-3">

                <form id="form" onsubmit="return StoreData()">
                    @csrf
                    <div>
                        <label for="jenissurat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                            Surat</label>
                        <select id="jenissurat" name="jenis_surat_id" required
                                class="bg-white  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">Pilih Jenis Surat</option>
                            @foreach($jenis as $d)
                                <option value="{{$d->id}}">{{$d->nama}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="atasnama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Atas
                            Nama</label>
                        <input type="text" name="nama" id="atasnama" value="{{auth()->user()->nama}}" readonly
                               class="bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="Atas Nama" required="">
                    </div>

                    <div>
                        <label for="keperluan"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">keperluan</label>
                        <textarea id="keperluan" rows="4" name="keperluan"
                                  class="block p-2.5 w-full text-sm text-gray-900 bg-white  rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                  placeholder="Masukan Keperluan anda disini..."></textarea>

                    </div>

                    <button type="submit" class="block rounded-md bg-blue-500 hover:bg-blue-700 text-white font-bold text-center py-3 w-100 mt-3"
                       href="#">
                        Simpan
                    </button>
                </form>
            </div>

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
                                    Jenis Surat
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Keperluan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Atas Nama
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
                                    Jenis Surat
                                </td>
                                <td class="px-6 py-4">
                                    Atas Nama
                                </td>
                                <td class="px-6 py-4">
                                    Status
                                </td>
                                <td class="px-6 py-4">
                                    Keperluan
                                </td>

                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
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
                { data: 'jenis.nama', name: 'jenis.nama'},
                { data: 'status', name: 'status', render(data) {
                        return data == 1 ? 'Diterima' : data == 2 ? 'DItolak' : 'Menunggu';
                    }},
                { data: 'keperluan', name: 'keperluan'},
                { data: 'user.nama', name: 'user.nama'},

            ];

            datatable('tabel', '{{route('warga.pengajuan.datatable')}}', colums)
        }
        function StoreData(){
            confirmSave('Simpan pengajuan', 'Apa anda yakin ?', 'form', '{{route('warga.pengajuan')}}', afterSave);
            return false;
        }

        function afterSave(){
            clearForm();
            $('#tabel').DataTable().ajax.reload();
        }
    </script>
@endsection
