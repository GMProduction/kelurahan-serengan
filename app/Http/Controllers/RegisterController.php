<?php

namespace App\Http\Controllers;

use App\Helper\CustomController;
use App\Models\User;
use App\Models\Warga;
use http\Exception\InvalidArgumentException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends CustomController
{
    public function index()
    {
        if (request()->method() == 'POST') {
            return $this->storeData();
        }

        return view('auth/daftar');
    }

    public function storeData()
    {
        DB::beginTransaction();

        $fieldUser  = request()->validate([
            'nama'     => 'required',
            'username' => 'required',
            'password' => 'required|confirmed',
        ]);
        $fieldWarga = request()->validate([
            'no_kk'           => 'required',
            'no_ktp'          => 'required',
            'jenis_kelamin'   => 'required',
            'agama'           => 'required',
            'tempat_lahir'    => 'required',
            'tanggal_lahir'   => 'required',
            'kewarganegaraan' => 'required',
            'pekerjaan'       => 'required',
            'tempat_tinggal'  => 'required',
            'file_ktp'        => 'required',
            'file_kk'         => 'required',
        ]);

        $imageKtp = $this->generateImageName('file_ktp');
        $imageKK  = $this->generateImageName('file_kk');

        $dir                         = '/assets/file/';
        $destinationPath             = public_path().$dir;
        $fieldWarga['file_ktp']      = $dir.$imageKtp;
        $fieldWarga['file_kk']       = $dir.$imageKK;
        $fieldWarga['tanggal_lahir'] = new \DateTime(request('tanggal_lahir'));
        $fieldUser['password']       = Hash::make(request('password'));
        $fieldUser['role']           = 'warga';
        $user                        = new User();
        $user = $user->create($fieldUser);

        $fieldWarga['user_id'] = $user->id;
        $warga = new Warga();
        $warga->create($fieldWarga);

        $fileKtp = request()->file('file_ktp');
        $fileKtp->move($destinationPath, $imageKtp);

        $fileKK = request()->file('file_kk');
        $fileKK->move($destinationPath, $imageKK);


        DB::commit();

        return redirect('/');

    }

}
