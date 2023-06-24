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
                        Pengguna
                    </a>
                </li>

            </ol>
        </nav>




        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                data-tabs-toggle="#myTabContent" role="tablist">
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="admin-tab" data-tabs-target="#admin"
                        type="button" role="tab" aria-controls="admin" aria-selected="false">Admin</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="warga-tab" data-tabs-target="#warga" type="button" role="tab" aria-controls="warga"
                        aria-selected="false">Warga</button>
                </li>

            </ul>
        </div>
        <div id="myTabContent">
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="admin" role="tabpanel"
                aria-labelledby="admin-tab">
                <div class="grid grid-cols-4 gap-4">
                    <div class="border rounded-lg p-2 space-y-3">
                        <p class="mb-2">User Baru</p>
                        <div>
                            <label for="role"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
                            <select id="role"
                                class="bg-white  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option>Pilih Role</option>
                                <option>Admin</option>
                                <option>Pimpinan</option>
                            </select>
                        </div>



                        <div>
                            <label for="username"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                            <input type="text" name="username" id="username"
                                class="bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Username" required="">
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="">
                        </div>

                        <a class="block rounded-md bg-blue-500 hover:bg-blue-700 text-white font-bold text-center py-3"
                            href="#">
                            Simpan
                        </a>
                    </div>

                    <div class="col-span-3 ">
                        <p class="mb-2">Tabel Admin</p>
                        <div class="border rounded-lg  ">
                            <div class="relative overflow-x-auto rounded-lg">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                #
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Username
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Role
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


                </div>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="warga" role="tabpanel"
                aria-labelledby="warga-tab">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <div class="border rounded-lg  ">
                            <div class="relative overflow-x-auto rounded-lg">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                #
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                No Ktp
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Nama
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Jenis Kelamin
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Tanggal Lahir
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Pekerjaan
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
                                                No KTP
                                            </td>
                                            <td class="px-6 py-4">
                                                Nama
                                            </td>
                                            <td class="px-6 py-4">
                                                Jenis Kelamin
                                            </td>
                                            <td class="px-6 py-4">
                                                Tanggal Lahir
                                            </td>
                                            <td class="px-6 py-4">
                                                Pekerjaan
                                            </td>

                                            <td>
                                                <a class="py-2 px-3 rounded-lg bg-blue-500 hover:bg-blue-700 text-white"
                                                    href="#">Detail</a>
                                                <a class="py-2 px-3 rounded-lg bg-red-500 hover:bg-red-700 text-white"
                                                    href="#">Hapus</a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div>

                        <div class="border rounded-lg  p-2">
                            <p class="mb-5 font-bold">Detail Warga</p>
                            <div class="grid grid-cols-3 gap-4 ">
                                <div>
                                    <label for="noktp"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                                        KTP</label>
                                    <input type="text" readonly name="noktp" id="noktp"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Nomor KTP" required="">
                                </div>
                                <div>
                                    <label for="nokk"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                                        KK</label>
                                    <input type="text" readonly name="nokk" id="nokk"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Nomor KK" required="">
                                </div>

                                <div>
                                    <label for="nama"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                                    <input type="text" readonly name="username" id="username"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Username" required="">
                                </div>
                                <div>
                                    <label for="jenkel"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                                        Kelamin</label>
                                    <input type="text" readonly name="jenkel" id="jenkel"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="jenkel" required="">
                                </div>
                                <div>
                                    <label for="agama"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agama</label>
                                    <input type="text" readonly name="agama" id="agama"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="agama" required="">
                                </div>
                                <div>
                                    <label for="temlahir"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat
                                        Lahir</label>
                                    <input type="text" readonly name="temlahir" id="temlahir"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Tempat Lahir" required="">
                                </div>
                                <div>
                                    <label for="tanglahir"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                                        Lahir</label>
                                    <input type="text" readonly name="tanglahir" id="tanglahir"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="tanggal lahir" required="">
                                </div>

                                <div>
                                    <label for="pekerjaan"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pekerjaan</label>
                                    <input type="text" readonly name="pekerjaan" id="pekerjaan"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Pekerjaan" required="">
                                </div>
                                <div>
                                    <label for="kewarganegaraan"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kewarganegaraan</label>
                                    <input type="text" readonly name="kewarganegaraan" id="kewarganegaraan"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Kewarganegaraan" required="">
                                </div>


                            </div>

                            <p class="text-sm mt-3">Foto KTP</p>
                            <img class="h-56" src="{{ asset('assets/images/contoh-foto-ktp.jpg') }}" />

                            <p class="text-sm mt-3">Foto KK</p>
                            <img class="w-full" src="{{ asset('assets/images/kk.jpeg') }}" />
                        </div>
                    </div>
                </div>

            </div>

        </div>





    </div>
@endsection

@section('morejs')
    <script src="{{ asset('js/admin/moment.min.js') }}"></script>
@endsection
