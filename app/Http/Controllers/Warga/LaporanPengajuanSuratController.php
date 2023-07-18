<?php

namespace App\Http\Controllers\Warga;

use App\Http\Controllers\Controller;
use App\Models\Pengajuan;
use Yajra\DataTables\DataTables;

class LaporanPengajuanSuratController extends Controller
{
    public function datatable()
    {
        $data = Pengajuan::with(['jenis', 'user.warga'])->where('user_id',auth()->id());

        return DataTables::of($data)
                         ->make(true);
    }

    public function index(){
        return view('warga/laporan/laporan');
    }

}
