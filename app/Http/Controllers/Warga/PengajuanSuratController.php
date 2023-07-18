<?php

namespace App\Http\Controllers\Warga;

use App\Http\Controllers\Controller;
use App\Models\JenisSurat;
use App\Models\Pengajuan;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Yajra\DataTables\DataTables;

class PengajuanSuratController extends Controller
{
    public function datatable(){
        $data = Pengajuan::with(['jenis', 'user'])->where('user_id',auth()->id());

        return DataTables::of($data)
                         ->make(true);
    }

    public function jsonTipe(){
        return JenisSurat::all();
    }

    /**
     * @return Application|Factory|View|null
     */
    public function index(){
        if (request()->method() == 'POST'){
            return $this->storeData();
        }
        $jenis = $this->jsonTipe();
        return view('warga/pengajuan/pengajuan',['jenis' => $jenis]);
    }

    public function storeData(){
        $field = request()->validate([
            'jenis_surat_id' => 'required',
            'keperluan' => 'required',
        ]);

        $pengajuan = new Pengajuan();
        $pengajuan->create([
            'jenis_surat_id' => request('jenis_surat_id'),
            'user_id' => auth()->id(),
            'keperluan' => request('keperluan'),
        ]);

        return 'sucess';
    }


}
