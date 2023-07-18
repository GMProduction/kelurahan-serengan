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
                        Tipe Surat
                    </a>
                </li>

            </ol>
        </nav>


            <div class="border rounded-lg p-2 space-y-3">
                <p class="mb-2">Form</p>
                <form id="form"  onsubmit="return saveSurat()">
                    @csrf
                    <input id="id" name="id" hidden>
                    <div>
                        <label for="username"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Jenis Surat</label>
                        <input type="text" name="nama" id="nama"
                               class="bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="Nama" required="">
                    </div>
                   <div class="mt-2 flex gap-2">
                       <button type="submit" class="block rounded-md bg-blue-500 hover:bg-blue-700 text-white font-bold text-center p-2">
                           Simpan
                       </button>
                       <a onclick="clearForm()" role="button" class="block rounded-md bg-red-500 hover:bg-red-700 text-white font-bold text-center p-2">
                           Clear
                       </a>
                   </div>
                </form>
            </div>
        <p class="mt-5">Tabel Tipe Surat</p>
        <div class="border rounded-lg  p-2">
            <div class="relative overflow-x-auto rounded-lg">
                <table id="tabel" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>

                    </tr>
                    </thead>
                    {{--                    <tbody>--}}
                    {{--                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">--}}
                    {{--                        <th scope="row"--}}
                    {{--                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">--}}
                    {{--                            1--}}
                    {{--                        </th>--}}
                    {{--                        <td class="px-6 py-4">--}}
                    {{--                            Tangal--}}
                    {{--                        </td>--}}
                    {{--                        <td class="px-6 py-4">--}}
                    {{--                            Nomor Surat--}}
                    {{--                        </td>--}}
                    {{--                        <td class="px-6 py-4">--}}
                    {{--                            Jenis Surat--}}
                    {{--                        </td>--}}
                    {{--                        <td class="px-6 py-4">--}}
                    {{--                            Atas Nama--}}
                    {{--                        </td>--}}
                    {{--                        <td class="px-6 py-4">--}}
                    {{--                            Status--}}
                    {{--                        </td>--}}
                    {{--                        <td class="px-6 py-4">--}}
                    {{--                            Keperluan--}}
                    {{--                        </td>--}}

                    {{--                    </tr>--}}

                    {{--                    </tbody>--}}
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
                    data: 'nama', name: 'nama'
                },
                {
                    className: "text-center",
                    data: 'action', name: 'action', orderable: false, searchable: false
                },
            ];

            datatable('tabel', '{{route('admin.tipesurat.datatable')}}', colums)
        }

        function saveSurat(){
            confirmSave('Simpan Jenis Surat', 'Apa anda yakin ?', 'form', '{{route('admin.tipesurat.post')}}', afterSave);
            return false;
        }

        function afterSave(){
            clearForm();
            $('#tabel').DataTable().ajax.reload();
        }

        function clearForm(){
            $('#form #id').val('');
            $('#form #nama').val('');
        }

        $(document).on('click','#editData', function (){
            $('#form #id').val($(this).data('id'))
            $('#form #nama').val($(this).data('nama'))
        })

        $(document).on('click','.deleteData', function (){
            let form = {
                '_token': '{{csrf_token()}}',
                'id': $(this).data('id')
            }
            confirmDeleteSerialize('Hapus Data','Apa anda yakin ?', form, '{{route('admin.tipesurat.delete')}}',afterSave);
            return false;
        })
    </script>
@endsection
