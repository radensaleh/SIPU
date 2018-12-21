<?php

namespace App\Http\Controllers;

use DB;
use App\AdminUKM;
use App\UKM;
use App\Jurusan;
use App\Prodi;
use App\Admin;
use App\Mahasiswa;
use App\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{

    public function adminpage(Request $request){
      if($request->session()->exists('email')){
        return redirect()->route('dashboardAdminWeb');
      }else{
        return view('adminWeb.admin'); //sebelum login
      }
    }

    public function logout(Request $request){
      $request->session()->forget('email');
      return redirect()->route('adminpage');
    }

    public function dashboard(Request $request){
      if(!$request->session()->exists('email')){
        return redirect()->route('adminpage');
      }else{
        $countAdminUKM = AdminUKM::count();
        $countUKM      = UKM::count();
        $countJUR      = Jurusan::count();
        $countPRO      = Prodi::count();
        $admin         = Admin::all();
        $countMHS      = Mahasiswa::count();
        $countDaftar   = Pendaftaran::count();

        $ukmKompa = DB::table('tb_pendaftaran')->where('id_ukm', 'UKM01')->count();
        $ukmKopen = DB::table('tb_pendaftaran')->where('id_ukm', 'UKM02')->count();
        $ukmRpi   = DB::table('tb_pendaftaran')->where('id_ukm', 'UKM03')->count();
        $ukmPopi  = DB::table('tb_pendaftaran')->where('id_ukm', 'UKM04')->count();
        $ukmFolafo= DB::table('tb_pendaftaran')->where('id_ukm', 'UKM05')->count();

        return view('adminWeb.dashboard',
            compact(
                'countAdminUKM','countUKM','countJUR',
                'countPRO','countMHS','countDaftar',
                'ukmKompa','ukmKopen','ukmRpi',
                'ukmPopi','ukmFolafo'
            ), ['admin' => $admin]
        ); //sesudah login
      }
    }

    public function doLogin(Request $request){
      $auth = auth()->guard('adminWeb');

        $credentials = [
          'email'     => $request->email,
          'password' => $request->password,
        ];


      if( $auth->attempt($credentials) ){
          $request->session()->put('email', $request->email);
          return response()->json([
            'error' => 0,
            'message' => 'Login Success'
          ], 200);
      }else{
          return response()->json([
            'error' => 1,
            'message' => 'Wrong Email or Password'
          ], 200);
      }
    }
}
