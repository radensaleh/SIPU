<?php

namespace App\Http\Controllers;

use DB;
use App\UKM;
use App\Mahasiswa;
use App\Pendaftaran;
use App\Admin;
use Illuminate\Http\Request;

class UKMController extends Controller
{
    public function show_dataukm(){
        $UKM         = UKM::all();
        $admin       = Admin::all();
        $countMHS    = Mahasiswa::count();
        $countDaftar = Pendaftaran::count();

        return view('adminWeb.dataukm',
            compact(
                'UKM',
                'countMHS',
                'countDaftar',
                'admin'
            )
        );
    }

    public function store(Request $request){
        $checkIfExist = UKM::where('id_ukm', $request->id_ukm)->get();

        if( count($checkIfExist) != 0 ){
          return response()->json([
             'error' => 1,
             'message' => 'Id UKM Already Exist'
           ], 200);
        }

        $create = UKM::create($request->all());
        if( $create ) {
           return response()->json([
             'error' => 0,
             'message' => 'Success Add Data'
           ], 200);
      }
    }

    public function update(Request $request){
          $dataukm = UKM::findOrFail($request->id_ukm);
          $dataukm->update($request->all());

          if( $dataukm ){
            return response()->json([
              'error' => 0,
              'message' => 'Success Edit Data'
            ], 200);
          }
    }
    public function destroy(Request $request){
         $dataukm = UKM::findOrFail($request->id_ukm);
         $dataukm->delete();

         if( $dataukm ){
           return response()->json([
             'error' => 0,
             'message' => 'Success Delete Data'
           ], 200);
         }
    }

    public function getAllUKM(){
          $ukm = UKM::all();

          echo json_encode($ukm);
    }
}
