<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login || Kelurahan Serengan</title>

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
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 max-w-lg dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1
                        class="text-2xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Selamat Datang
                    </h1>
                    <h1 class="text-md  leading-tight tracking-tight text-gray-700 mt-0 pt-0 dark:text-white">
                        Masukan username dan password
                    </h1>
                    <form class="space-y-4 md:space-y-6" method="POST">
                        @csrf
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                            <input type="text" name="username" id="username" value="{{old('username')}}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Username" required="">
                            @if ($errors->has('username'))
                                <p class="text-red-500" style="font-size: 0.8em">
                                    {{ $errors->first('username') }}
                                </p>
                            @endif
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

                        <button type="submit"
                            class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign
                            in</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Belum punya akun? <a href="/daftar"
                                class="font-medium text-primary-600 hover:underline dark:text-primary-500">Daftar
                                disini</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

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
</script>
</body>

</html>
