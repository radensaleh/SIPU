<?php

namespace App\Http\Controllers;

use App\Prodi;
use App\Jurusan;
use App\Mahasiswa;
use App\Pendaftaran;
use App\Admin;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function show_dataprodi(Request $request){
        if(!$request->session()->get('id_admin')){
          return redirect()->route('adminpage');
        }else{
          $PRO = Prodi::all();
          $JUR = Jurusan::all();
          $admin       = Admin::all();
          $countMHS    = Mahasiswa::count();
          $countDaftar = Pendaftaran::count();

          return view('adminWeb.dataprodi',
              compact(
                  'PRO',
                  'JUR',
                  'countMHS',
                  'countDaftar',
                  'admin'
              )
          );
        }
    }

    public function store(Request $request){
        $checkIfExist = Prodi::where('id_prodi', $request->id_prodi)->get();

        if( count($checkIfExist) != 0 ){
          return response()->json([
             'error' => 1,
             'message' => 'Id Prodi Already Exist'
           ], 200);
        }

        $create = Prodi::create($request->all());
        if( $create ) {
           return response()->json([
             'error' => 0,
             'message' => 'Success Add Data'
           ], 200);
      }
    }

    public function update(Request $request){
          $dataProdi = Prodi::findOrFail($request->id_prodi);
          $dataProdi->update($request->all());

          if( $dataProdi ){
            return response()->json([
              'error' => 0,
              'message' => 'Success Edit Data'
            ], 200);
          }
    }
    public function destroy(Request $request){
         $dataProdi = Prodi::findOrFail($request->id_prodi);
         $dataProdi->delete();

         if( $dataProdi ){
           return response()->json([
             'error' => 0,
             'message' => 'Success Delete Data'
           ], 200);
         }
    }

    //API LARAVEL
    public function getAllProdi(){
        $PRO = Prodi::all();

        echo json_encode($PRO);
    }
}
