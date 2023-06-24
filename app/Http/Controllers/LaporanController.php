<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;

class LaporanController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('admin.laporan');
    }






    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // public function cetakLaporan($id)
    // {
    //     $pdf = App::make('dompdf.wrapper');
    //     $pdf->loadHTML('<h1>Test</h1>');
    //     return $pdf->stream();
    // }

    public function cetakLaporan()
    {

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($this->dataPengajuan())->setPaper('f4', 'potrait');

        return $pdf->stream();
        // return $this->dataPengajuan();
    }

    public function dataPengajuan()
    {

        $start = \request('start');
        $end = \request('end');

        return view('admin/laporan/laporanpengajuan');
    }
}
