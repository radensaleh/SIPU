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

    public function index(){
        $admin = new Admin;
        $admin->nama  = 'Admin';
        $admin->email = 'admin@admin.com';
        $admin->password = '123456';
        $admin->save();
    }

    public function adminpage(){
      return view('adminWeb.admin'); //sebelum login
    }

    public function dashboard(){
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

    public function doLogin(){
      $auth = auth()->guard('adminWeb');

        $credentials = [
          'email'     => Input::get('email'),
          'password' => Input::get('password'),
        ];


      if( $auth->attempt($credentials) ){
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
