<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_data;
use Validator;

class UserDataController extends Controller
{
    public function postUserDataInsert(Request $request, user_data $user_data){
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'provinsi_ktp' => 'required',
            'kabupaten_kota_ktp' => 'required',
            'kecamatan_ktp' => 'required',
            'kelurahan_ktp' => 'required',
            'rt_ktp' => 'required',
            'rw_ktp' => 'required',
            'kode_pos_ktp' => 'required',
            'alamat_domisili' => 'required',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
    
        $user_data->nama_lengkap = $request->post('nama_lengkap');
        $user_data->tempat_lahir = $request->post('tempat_lahir');
        $user_data->tanggal_lahir = $request->post('tanggal_lahir');
        $user_data->provinsi_ktp = $request->post('provinsi_ktp');
        $user_data->kabupaten_kota_ktp = $request->post('kabupaten_kota_ktp');
        $user_data->kecamatan_ktp = $request->post('kecamatan_ktp');
        $user_data->kelurahan_ktp = $request->post('kelurahan_ktp');
        $user_data->rt_ktp = $request->post('rt_ktp');
        $user_data->rw_ktp = $request->post('rw_ktp');
        $user_data->kode_pos_ktp = $request->post('kode_pos_ktp');
        $user_data->alamat_domisili = $request->post('alamat_domisili');
        $user_data->created_at = now();
        $user_data->updated_at = now();
        $user_data->save();
    
        return redirect()->intended(route('user.profile'));
    }
    
}
