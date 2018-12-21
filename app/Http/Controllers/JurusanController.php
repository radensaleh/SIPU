<?php

namespace App\Http\Controllers;

use App\Jurusan;
use App\Mahasiswa;
use App\Pendaftaran;
use App\Admin;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function show_datajurusan(){
        $JUR         = Jurusan::all();
        $admin       = Admin::all();
        $countMHS    = Mahasiswa::count();
        $countDaftar = Pendaftaran::count();

        return view('adminWeb.datajurusan',
            compact(
                'JUR',
                'countMHS',
                'countDaftar',
                'admin'
            )
        );
    }

    public function store(Request $request){
        $checkIfExist = Jurusan::where('id_jurusan', $request->id_jurusan)->get();

        if( count($checkIfExist) != 0 ){
          return response()->json([
             'error' => 1,
             'message' => 'Id Jurusan Already Exist'
           ], 200);
        }

        $create = Jurusan::create($request->all());
        if( $create ) {
           return response()->json([
             'error' => 0,
             'message' => 'Success Add Data'
           ], 200);
      }
    }

    public function update(Request $request){
          $datajurusan = Jurusan::findOrFail($request->id_jurusan);
          $datajurusan->update($request->all());

          if( $datajurusan ){
            return response()->json([
              'error' => 0,
              'message' => 'Success Edit Data'
            ], 200);
          }
    }
    public function destroy(Request $request){
         $datajurusan = Jurusan::findOrFail($request->id_jurusan);
         $datajurusan->delete();

         if( $datajurusan ){
           return response()->json([
             'error' => 0,
             'message' => 'Success Delete Data'
           ], 200);
         }
    }
}
