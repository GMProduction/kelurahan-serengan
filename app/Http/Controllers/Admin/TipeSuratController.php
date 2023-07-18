<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JenisSurat;
use Yajra\DataTables\DataTables;

class TipeSuratController extends Controller
{

    public function datatable(){

        $data = JenisSurat::query();
        return DataTables::of($data)
                         ->addColumn(
                             'action',
                             function ($data)  {
                                 $id = $data->id;

                                 return "<a type=\"button\" id='editData' data-id='".$id."' data-nama='".$data->nama."'  data-username='".$data->username."'
                                       class=\"editData font-bold cursor-pointer p-2 bg-blue-600 rounded-md text-white transition-all duration-300  hover:bg-blue-400\">Edit Data</a>
                                    <a href=\"#\" data-id='".$id."'
                                       class=\"deleteData font-bold p-2 bg-red-600 rounded-md text-white transition-all duration-300  hover:bg-red-400\">Hapus</a>";
                             }
                         )->rawColumns(['action'])->make(true);
    }


    public function index(){
        if (request()->method() == 'POST'){
            return $this->storeData();
        }
        return view('admin/tipe-surat/index');
    }

    /**
     * @return string
     */
    public function storeData(){
        $field = request()->validate([
            'nama' => 'required'
        ]);
        $jenis = JenisSurat::find(request('id'));
        if ($jenis){
            $jenis->update($field);
        }else{
            $jenis = new JenisSurat();
            $jenis->create($field);
        }

        return 'success';
    }

    public function remove(){
        JenisSurat::destroy(request('id'));
        return 'success';
    }

}
