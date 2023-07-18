<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public function datatable()
    {
        $role = request('q');
        if ($role == 'user') {
            $eq = '=';
            $textButton = 'Detail';
        } else {
            $eq = '!=';
            $textButton = 'Edit';
        }
//        $data = User::with('warga')->where('role', $eq, 'warga');
        $data = DB::table('users')
            ->leftJoin('wargas','wargas.user_id','=','users.id')
            ->select(['users.*'])
            ->where('role',$eq,'warga');
        if ($role == 'user'){
            $data = $data->addSelect(['wargas.no_ktp','wargas.jenis_kelamin','wargas.tanggal_lahir','wargas.pekerjaan']);
        }
        return DataTables::of($data)
                         ->addColumn(
                             'action',
                             function ($data) use ($textButton) {
                                 $id = $data->id;

                                 return "<a type=\"button\" id='".$textButton."Data' data-id='".$id."' data-nama='".$data->nama."'  data-username='".$data->username."' data-role='".$data->role."'
                                       class=\"editData font-bold cursor-pointer p-2 bg-blue-600 rounded-md text-white transition-all duration-300  hover:bg-blue-400\">$textButton</a>
                                    <a href=\"#\" data-id='".$id."'
                                       class=\"deleteData font-bold p-2 bg-red-600 rounded-md text-white transition-all duration-300  hover:bg-red-400\">Hapus</a>";
                             }
                         )->rawColumns(['action'])->make(true);
    }

    public function index()
    {
        if (request()->method() == 'POST') {
            return $this->storeAdmin();
        }

        return view('admin/pengguna/pengguna');
    }

    public function storeAdmin()
    {
        $field = request()->validate([
            'nama' => 'required',
            'username' => 'required',
            'role' => 'required',
        ]);

        if (request('password')) {
            request()->validate([
                'password' => 'required|confirmed',
            ]);
            $field['password'] = Hash::make(request('password'));
        }
        $user = User::find(request('id'));

        if ($user) {
            $user->update($field);
        } else {
            $user = new User();
            $user->create($field);
        }

        return 'success';

    }

    public function findUserById($id){
        return User::with('warga')->find($id);
    }

}
