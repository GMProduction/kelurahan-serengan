<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Daftar || Kelurahan Serengan</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
</head>

<body class="antialiased h-screen">
    <section class="bg-blue-50 dark:bg-gray-900 h-screen">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-8  mr-2" src="{{ asset('assets/images/logo.png') }}" alt="logo">
                Kelurahan Serengan
            </a>
            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 max-w-7xl dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1
                        class="text-2xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Daftar User Baru
                    </h1>
                    <h1 class="text-md  leading-tight tracking-tight text-gray-700 mt-0 pt-0 dark:text-white">
                        Masukan data dengan benar
                    </h1>

                    <form class="space-y-4 md:space-y-6 " action="#">
                        <div class="grid grid-cols-3 gap-4 ">
                            <div>
                                <label for="noktp"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                                    KTP</label>
                                <input type="text" name="noktp" id="noktp"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Nomor KTP" required="">
                            </div>
                            <div>
                                <label for="nokk"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                                    KK</label>
                                <input type="text" name="nokk" id="nokk"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Nomor KK" required="">
                            </div>

                            <div>
                                <label for="nama"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                                <input type="text" name="username" id="username"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Username" required="">
                            </div>
                            <div>
                                <label for="jenkel"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                                    Kelamin</label>
                                <select id="jenkel"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option>Pilih Jenis Kelamin</option>
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                            <div>
                                <label for="agama"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agama</label>
                                <select id="agama"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option>Pilih Agama</option>
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Khatolik</option>
                                    <option>Hindu</option>
                                    <option>Budha</option>
                                </select>
                            </div>
                            <div>
                                <label for="temlahir"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat
                                    Lahir</label>
                                <input type="text" name="temlahir" id="temlahir"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Tempat Lahir" required="">
                            </div>
                            <div>
                                <label for="tanglahir"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                                    Lahir</label>
                                <div class="relative max-w-sm">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input datepicker datepicker-autohide datepicker-title="Flowbite datepicker"
                                        type="text"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Select date">
                                </div>
                            </div>

                            <div>
                                <label for="pekerjaan"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pekerjaan</label>
                                <input type="text" name="pekerjaan" id="pekerjaan"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Pekerjaan" required="">
                            </div>
                            <div>
                                <label for="kewarganegaraan"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kewarganegaraan</label>
                                <input type="text" name="kewarganegaraan" id="kewarganegaraan"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Kewarganegaraan" required="">
                            </div>
                            <div>
                                <label for="fotoktp"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto
                                    Ktp</label>
                                <input
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="fotoktp" id="fotoktp" type="file">
                            </div>
                            <div>
                                <label for="fotokk"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto
                                    KK</label>
                                <input
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="fotokk" id="fotokk" type="file">
                            </div>

                        </div>

                        <hr>
                        <div class="grid grid-cols-3 gap-4">
                            <div>
                                <label for="username"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                                <input type="text" name="username" id="username" placeholder="Masukan Nama"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required="">
                            </div>
                            <div>
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required="">
                            </div>
                            <div>
                                <label for="confirmation_password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfirmasi
                                    Password</label>
                                <input type="password" name="confirmation_password" id="confirmation_password"
                                    placeholder="••••••••"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required="">
                            </div>
                        </div>

                        <button type="submit"
                            class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Daftar</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Sudah punya akun? <a href="/login"
                                class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login
                                disini</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/datepicker.min.js"></script>
</body>

</html>
