@extends('warga.base')

@section('morecss')
@endsection

@section('content')
    @if (\Illuminate\Support\Facades\Session::has('failed'))
        <script>
            Swal.fire({
                title: 'Gagal',
                icon: 'error',
                text: "Terjadi Kesalahan Sistem",
            });
        </script>
    @endif
    @if (\Illuminate\Support\Facades\Session::has('success'))
        <script>
            Swal.fire({
                title: 'Berhasil',
                icon: 'success',
                text: "{{ \Illuminate\Support\Facades\Session::get('success') }}",
            });
        </script>
    @endif
    <div class="panel min-h-screen flex justify-center items-center" style="margin-top: -100px">



        <div class="flex flex-col justify-center items-center">
            <img src="{{ asset('assets/images/logo.png') }}" />
            <p class="mt-2 text-2xl font-bold">Sistem Informasi Pengajuan Surat Keterangan Kelurahan Serengan</p>
        </div>


    </div>
@endsection

@section('morejs')
    <script src="{{ asset('js/admin/dropify/js/dropify.js') }}"></script>
@endsection
