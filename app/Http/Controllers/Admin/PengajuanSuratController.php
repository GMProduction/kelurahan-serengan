<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengajuan;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Yajra\DataTables\DataTables;

class PengajuanSuratController extends Controller
{
    public function datatable()
    {
        $data = Pengajuan::with(['jenis', 'user.warga']);

        return DataTables::of($data)
                         ->addColumn(
                             'action',
                             function ($data) {
                                 $id = $data->id;

                                 return "<a type=\"button\" id='detailData' data-status='".$data->status."' data-no='".$data->no_surat."' data-keterangan='".$data->keterangan."' data-start='".$data->tanggal_awal."' data-end='".$data->tanggal_akhir."' data-id='".$id."'
                                       class=\"editData font-bold cursor-pointer p-2 bg-blue-600 rounded-md text-white transition-all duration-300  hover:bg-blue-400\">> </a>";
                             }
                         )->make(true);
    }

    public function index()
    {
        if (request()->method() == 'POST') {
            return $this->storeData();
        }

        return view('admin/pengajuan/pengajuan');
    }

    public function storeData()
    {
        $noSurat = null;
        if (request('status') == 1) {
            request()->validate([
                'id'            => 'required',
                'tanggal_awal'  => 'required',
                'tanggal_akhir' => 'required',
                'keterangan'    => 'required',
                'status'        => 'required',
            ]);
            $noSurat   = 'TM.00.04 / '.request('id').' / VI / '.Carbon::now()->format('Y');
        }

        $pengajuan = Pengajuan::find(request('id'));
        $pengajuan->update([
            'no_surat'      => $noSurat,
            'tanggal_awal'  => request('tanggal_awal') ? new \DateTime(request('tanggal_awal')) : null,
            'tanggal_akhir' => request('tanggal_akhir') ? new \DateTime(request('tanggal_akhir')): null,
            'keterangan'    => request('keterangan'),
            'status'        => request('status'),
        ]);

        return 'success';
    }

    public function dataPengajuan()
    {
        $id   = request('id');
        $data = Pengajuan::with(['jenis', 'user.warga'])->find($id);

        return view('admin/pengajuan/pdf', ['data' => $data]);

    }

    public function cetak()
    {
//        return $this->dataPengajuan();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($this->dataPengajuan())->setPaper('f4', 'potrait');

        return $pdf->stream();
    }

}
