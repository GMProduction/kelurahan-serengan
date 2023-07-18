<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengajuan;
use Yajra\DataTables\DataTables;

class LaporanPengajuanSuratController extends Controller
{
    public function datatable()
    {
        $data = Pengajuan::with(['jenis', 'user.warga']);

        return DataTables::of($data)
                         ->make(true);
    }

    public function index(){
        return view('admin/laporan/laporan');
    }

}
