<?php

namespace App\Http\Controllers;

use DB;
use Validator;
use App\Mahasiswa;
use App\Pendaftaran;
use App\Admin;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function show_datamhs(Request $request){
      if(!$request->session()->get('id_admin')){
        return redirect()->route('adminpage');
      }else{
        $mhs         = Mahasiswa::all();
        $admin       = Admin::all();
        $countMHS    = Mahasiswa::count();
        $countDaftar = Pendaftaran::count();

        return view('adminWeb.datamhs',
            compact(
                'mhs',
                'countMHS',
                'countDaftar',
                'admin'
            )
        );
      }
    }

    public function destroy(Request $request){
        $nim = Mahasiswa::findOrFail($request->nim);
        $nim->delete();

        if( $nim ){
          return response()->json([
              'error' => 0,
              'message' => 'Success Delete Data'
          ], 200);
        }

    }

    // ------------ API ------------------------- ///
    public function signup(Request $request){
        $checkIfExist = Mahasiswa::where('nim', $request->nim)->get();

        if( count($checkIfExist) != 0 ){
          return response()->json([
             'errorRes' => 1,
             'messageRes' => 'Nim Already Exist'
           ], 200);
        }


        $validatorEmail = Validator::make($request->all(), [
                'email' => 'required|email',
        ]);

        if( $validatorEmail->fails() ){
            return response()->json([
                'errorRes' => 2,
                'messageRes' => 'Harap cek kembali email anda'
            ], 200);
        }

        $validatorPassword = Validator::make($request->all(), [
                'password' => 'required|min:6',
        ]);

        if( $validatorPassword->fails() ){
            return response()->json([
                'errorRes' => 3,
                'messageRes' => 'Passwor Lemah [ Min 6 Character ]'
            ], 200);
        }

        $validatorAlamat = Validator::make($request->all(), [
                'alamat' => 'required|max:255',
        ]);

        if( $validatorAlamat->fails() ){
            return response()->json([
                'errorRes' => 4,
                'messageRes' => 'Alamat terlalu panjang [ Max 255 Character ]'
            ], 200);
        }

        $create = Mahasiswa::create($request->all());
        if( $create ) {
           return response()->json([
             'errorRes' => 0,
             'messageRes' => 'Sign Up Success'
           ], 200);
      }
    }

    public function signin(Request $request){
      $auth = auth()->guard('mhsMobile');

        $credentials = [
          'nim'      => $request->nim,
          'email'    => $request->email,
          'password' => $request->password,
        ];

      if( $auth->attempt($credentials) ){
          return response()->json([
            'errorRes' => 0,
            'messageRes' => 'Login Success'
          ], 200);
      }else{
          return response()->json([
            'errorRes' => 1,
            'messageRes' => 'Wrong Nim, Email or Password'
          ], 200);
      }

    }

    public function getMahasiswa($nim){
          $mhs = DB::table('tb_mahasiswa')->where('nim', $nim)->first();

          //$dataMhs = Mahasiswa::with('prodi')->where('nim', $nim)->get();
          // $data['nim']      = $mhs->nim;
          // $data['nama_mhs'] = $mhs->nama_mhs;
          // $data['id_prodi'] = $mhs->id_prodi;
          // $data['email']    = $mhs->email;
          // $data['password'] = Crypt::decryptString($mhs->password);
          // $data['alamat']   = $mhs->alamat;
          // $data['no_hp']    = $mhs->no_hp;

          return json_encode($mhs);
    }

    public function updateMhs(Request $request, $nim){
          $mahasiswa = Mahasiswa::findOrFail($nim);

          $validatorEmail = Validator::make($request->all(), [
                  'email' => 'required|email',
          ]);

          if( $validatorEmail->fails() ){
              return response()->json([
                  'errorRes' => 1,
                  'messageRes' => 'Harap cek kembali email anda'
              ], 200);
          }

          $validatorPassword = Validator::make($request->all(), [
                  'password' => 'required|min:6',
          ]);

          if( $validatorPassword->fails() ){
              return response()->json([
                  'errorRes' => 2,
                  'messageRes' => 'Passwor Lemah [ Min 6 Character ]'
              ], 200);
          }

          $validatorAlamat = Validator::make($request->all(), [
                  'alamat' => 'required|max:255',
          ]);

          if( $validatorAlamat->fails() ){
              return response()->json([
                  'errorRes' => 3,
                  'messageRes' => 'Alamat terlalu panjang [ Max 255 Character ]'
              ], 200);
          }

          $mahasiswa->update($request->all());
          if( $mahasiswa ){
            return response()->json([
              'errorRes' => 0,
              'messageRes' => 'Success Edit Data'
            ], 200);
          }
    }

}
