<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Daftar || Kelurahan Serengan</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet"/>
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

                <form class="space-y-4 md:space-y-6 " method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-3 gap-4 ">
                        <div>
                            <label for="noktp"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                                KTP</label>
                            <input type="number" name="no_kk" id="noktp" value="{{old('no_kk')}}"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="Nomor KTP" required="">
                            @if ($errors->has('no_kk'))
                                <p class="text-red-500" style="font-size: 0.8em">
                                    {{ $errors->first('no_kk') }}
                                </p>
                            @endif
                        </div>
                        <div>
                            <label for="nokk"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                                KK</label>
                            <input type="number" name="no_ktp" id="nokk" value="{{old('no_ktp')}}"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="Nomor KK" required="">
                            @if ($errors->has('no_ktp'))
                                <p class="text-red-500" style="font-size: 0.8em">
                                    {{ $errors->first('no_ktp') }}
                                </p>
                            @endif
                        </div>

                        <div>
                            <label for="nama"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                            <input type="text" name="nama" id="nama" value="{{old('nama')}}"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="Nama" required="">
                            @if ($errors->has('nama'))
                                <p class="text-red-500" style="font-size: 0.8em">
                                    {{ $errors->first('nama') }}
                                </p>
                            @endif
                        </div>
                        <div>
                            <label for="jenkel"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                                Kelamin</label>
                            <select id="jenkel" name="jenis_kelamin" required
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            @if ($errors->has('jenis_kelamin'))
                                <p class="text-red-500" style="font-size: 0.8em">
                                    {{ $errors->first('jenis_kelamin') }}
                                </p>
                            @endif
                        </div>
                        <div>
                            <label for="agama"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agama</label>
                            <select id="agama" name="agama" required
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Khatolik">Khatolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                            </select>
                            @if ($errors->has('agama'))
                                <p class="text-red-500" style="font-size: 0.8em">
                                    {{ $errors->first('agama') }}
                                </p>
                            @endif
                        </div>
                        <div>
                            <label for="temlahir"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat
                                Lahir</label>
                            <input type="text" name="tempat_lahir" id="temlahir" value="{{old('tempat_lahir')}}"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="Tempat Lahir" required="">
                            @if ($errors->has('tempat_lahir'))
                                <p class="text-red-500" style="font-size: 0.8em">
                                    {{ $errors->first('tempat_lahir') }}
                                </p>
                            @endif
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
                                       type="text" name="tanggal_lahir" required value="{{old('tanggal_lahir')}}"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       placeholder="Select date">
                            </div>
                            @if ($errors->has('tanggal_lahir'))
                                <p class="text-red-500" style="font-size: 0.8em">
                                    {{ $errors->first('tanggal_lahir') }}
                                </p>
                            @endif
                        </div>

                        <div>
                            <label for="pekerjaan"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pekerjaan</label>
                            <input type="text" name="pekerjaan" id="pekerjaan" value="{{old('pekerjaan')}}"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="Pekerjaan" required="">
                            @if ($errors->has('pekerjaan'))
                                <p class="text-red-500" style="font-size: 0.8em">
                                    {{ $errors->first('pekerjaan') }}
                                </p>
                            @endif
                        </div>
                        <div>
                            <label for="kewarganegaraan"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kewarganegaraan</label>
                            <input type="text" name="kewarganegaraan" id="kewarganegaraan" value="{{old('kewarganegaraan')}}"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="Kewarganegaraan" required="">
                            @if ($errors->has('kewarganegaraan'))
                                <p class="text-red-500" style="font-size: 0.8em">
                                    {{ $errors->first('kewarganegaraan') }}
                                </p>
                            @endif
                        </div>
                        <div>
                            <label for="kewarganegaraan"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kewarganegaraan</label>
                            <textarea type="text" name="tempat_tinggal" id="tempat_tinggal"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                      placeholder="Kewarganegaraan" required="">{{old('kewarganegaraan')}}</textarea>
                            @if ($errors->has('tempat_tinggal'))
                                <p class="text-red-500" style="font-size: 0.8em">
                                    {{ $errors->first('tempat_tinggal') }}
                                </p>
                            @endif
                        </div>
                        <div>
                            <label for="fotoktp"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto
                                Ktp</label>
                            <input name="file_ktp" required accept="image/jpeg"
                                   class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                   aria-describedby="fotoktp" id="fotoktp" type="file">
                            @if ($errors->has('file_ktp'))
                                <p class="text-red-500" style="font-size: 0.8em">
                                    {{ $errors->first('file_ktp') }}
                                </p>
                            @endif
                        </div>
                        <div>
                            <label for="fotokk"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto
                                KK</label>
                            <input name="file_kk" required accept="image/jpeg"
                                   class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                   aria-describedby="fotokk" id="fotokk" type="file">
                            @if ($errors->has('file_kk'))
                                <p class="text-red-500" style="font-size: 0.8em">
                                    {{ $errors->first('file_kk') }}
                                </p>
                            @endif
                        </div>

                    </div>

                    <hr>
                    <div class="grid grid-cols-3 gap-4">
                        <div>
                            <label for="username"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                            <input type="text" name="username" id="username" placeholder="Masukan Nama" value="{{old('username')}}"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   required="">
                        </div>
                        <div>
                            <label for="password"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <div class="flex gap-1">
                                <input type="password" name="password" id="password" placeholder="••••••••"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       required="">
                                <span class="flex items-center"><a role="button" id="btnShow" onclick="showPass(this,'password')" class="hide">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                      <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88"/>
                                    </svg>
                                    </a>
                                </span>
                            </div>
                            @if ($errors->has('password'))
                                <p class="text-red-500" style="font-size: 0.8em">
                                    {{ $errors->first('password') }}
                                </p>
                            @endif
                        </div>
                        <div>
                            <label for="confirmation_password"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfirmasi
                                Password</label>
                            <div class="flex gap-1">
                                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       required="">
                                <span class="flex items-center"><a role="button" id="btnShow" onclick="showPass(this,'password_confirmation')" class="hide">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                      <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88"/>
                                    </svg>
                                    </a>
                                </span>
                            </div>
                            @if ($errors->has('password_confirmation'))
                                <p class="text-red-500" style="font-size: 0.8em">
                                    {{ $errors->first('password_confirmation') }}
                                </p>
                            @endif
                        </div>
                    </div>
                    <button type="submit"
                            class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Daftar
                    </button>
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
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/datepicker.min.js"></script>

<script>
    function showPass(a, field) {
        if ($(a)[0].className == 'show') {
            $(a).removeClass('show').addClass('hide');
            $(a).html('<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">\n' +
                '                                      <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />\n' +
                '                                    </svg>')
            $('#' + field).get(0).type = 'password'
        } else {
            $(a).removeClass('hide').addClass('show');
            $(a).html('<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">\n' +
                '                                    <path stroke-linecap="round" stroke-linejoin="round"\n' +
                '                                          d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/>\n' +
                '                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>\n' +
                '                                    </svg>')

            $('#' + field).get(0).type = 'text'
        }
    }

    $(document).ready(function (){
        $('#jenkel').val('{{old('jenis_kelamin')}}');
        $('#agama').val('{{old('agama')}}');
    })
</script>
</body>
{{dump($errors)}}
</html>
