<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin || Kelurahan Serengan</title>

    {{-- Genosstyle --}}
    {{-- <link href="{{ asset('css/genosstyle.css') }} " rel="stylesheet"> --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="{{ asset('css/genosstailwind.css') }}" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />

    {{-- FLOWBITE --}}




    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.11.1/dist/cdn.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    {{--    <link href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css" rel="stylesheet"> --}}
    {{--    <link href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css" rel="stylesheet"> --}}
    {{--    <link href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" rel="stylesheet"> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @yield('morecss')
</head>

<body class="relative min-h-screen">

    <nav class="h-[70px] bg-white  top-0 w-full shadow-sm z-20 fixed">
        <div class="px-[24px] relative h-full flex items-center z-20 justify-between">

            <div class=" h-full flex items-center">
                <a onclick="openNav()"><span
                        class="material-symbols-outlined cursor-pointer rounded-full p-2 hover:bg-black/10 transition duration-300">
                        menu
                    </span></a>

                {{-- <img src="{{ asset('/assets/local/logosurakarta.png') }}" class="logo   h-10   " alt="Surakarta Logo"> --}}

                <p class="text-xl font-bold ml-4">Kelurahan Serengan </p>
            </div>

            <div class=" h-full flex items-center">
                <button type="button" id="dropdownDefault" data-dropdown-toggle="dropdown"
                    class="block w-[35px] h-[35px] rounded-full bg-black/10 cursor-pointer overflow-hidden">
                    <img src="{{ asset('assets/images/user.png') }}" class="logo   h-full w-full   " alt="Profil Logo">
                </button>


                <!-- Dropdown menu -->
                <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow ">
                    <ul class="py-1 text-sm text-gray-700 " aria-labelledby="dropdownDefault">

                        <a class="block py-2 px-4 text-xs   ">Hi, Admin</a>
                        <div class="divide-y-2"></div>
                        <li>
                            <a class="block py-2 px-4 hover:bg-gray-100  text-red-600 cursor-pointer"
                                href="/logout">Sign
                                out</a>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </nav>

    <div class="flex h-full">
        <div id="sidebar" class="bg-white shadow-sm h-full fixed top-0 left-0 sidebar">
            <div class="min-h-[70px]"></div>
            <div class="p-3 py-5">



                <a class="menu {{ request()->is('/') ? 'bg-primarylight' : '' }}  nav-link" href="/warga">

                    <span class="material-symbols-outlined mr-3">
                        dashboard
                    </span>
                    <p class="title-menu block menu-text">Dashboard</p>
                </a>



                <a class="menu {{ request()->is('/') ? 'bg-primarylight' : '' }}  nav-link" href="/warga/pengajuan">

                    <span class="material-symbols-outlined mr-3 ">
                        assignment
                    </span>
                    <p class="title-menu block menu-text">Pengajuan Surat</p>
                </a>
                <a class="menu {{ request()->is('/') ? 'bg-primarylight' : '' }}  nav-link" href="/warga/laporan">

                    <span class="material-symbols-outlined mr-3">
                        monitoring
                    </span>
                    <p class="title-menu block menu-text">Riwayat Pengajuan</p>
                </a>


            </div>
        </div>

        {{-- CONTENT --}}
        <div class="w-full">
            <div class="h-[70px]">

            </div>

            <div class="flex " style="min-height: calc(100vh - 70px)">
                <div class="side">

                </div>
                <div class="flex-1">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/datepicker.min.js"></script>
    <script src="{{ asset('/js/admin/nav.js') }}"></script>
    <script src="{{ asset('js/admin/admin.js') }}"></script>



    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script src="{{ asset('js/admin/datatable.js') }}"></script>



    @yield('morejs')

    <script>
        jQuery.fn.dataTableExt.oApi.fnPagingInfo = function (oSettings) {
            return {
                "iStart": oSettings._iDisplayStart,
                "iEnd": oSettings.fnDisplayEnd(),
                "iLength": oSettings._iDisplayLength,
                "iTotal": oSettings.fnRecordsTotal(),
                "iFilteredTotal": oSettings.fnRecordsDisplay(),
                "iPage": oSettings._iDisplayLength === -1 ?
                    0 : Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                "iTotalPages": oSettings._iDisplayLength === -1 ?
                    0 : Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
            };
        };
    </script>

</body>

</html>
