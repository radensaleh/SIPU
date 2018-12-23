<?php

namespace App\Http\Controllers;

use DB;
use Validator;
use App\Pendaftaran;
use App\Mahasiswa;
use App\Admin;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{

    public function show_datadaftar(Request $request){
        if(!$request->session()->get('id_admin')){
          return redirect()->route('adminpage');
        }else{
          $countMHS    = Mahasiswa::count();
          $countDaftar = Pendaftaran::count();
          $daftar      = Pendaftaran::all();
          $admin       = Admin::all();

          return view('adminWeb.datapendaftaran',
              compact(
                  'countMHS',
                  'countDaftar',
                  'daftar',
                  'admin'
              )
          );
        }
    }

    public function daftarUKM(Request $request){
      $getNama = DB::table('tb_ukm')->where('id_ukm', $request->id_ukm)->value('nama_ukm');
      $cekJikaTerdaftar = DB::table('tb_pendaftaran')
                ->where([
                    ['nim', '=', $request->nim ],
                    ['id_ukm', '=', $request->id_ukm ]
                ])->get();

      if( count($cekJikaTerdaftar) != 0 ){
        return response()->json([
           'errorRes' => 1,
           'messageRes' => 'Anda Sudah Mendaftar di UKM ' . $getNama
         ], 200);
      }

      $validator = Validator::make($request->all(), [
            'nim' => 'required',
            'id_ukm' => 'required',
            'alasan' => 'required|max:255'
      ]);

      if( $validator->fails() ){
        return response()->json([
          'errorRes' => 2,
          'messageRes' => 'Alasan terlalu panjang [ Max 255 Character ]'
        ], 200);
      }

      $daftar = Pendaftaran::create($request->all());
      if( $daftar ) {
         return response()->json([
           'errorRes' => 0,
           'messageRes' => 'Registration UKM Success'
         ], 200);
      }


    }
}
