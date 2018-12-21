<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//resource
Route::resource('data-admin','AdminUKMController');
Route::resource('data-ukm','UKMController');
Route::resource('data-prodi','ProdiController');
Route::resource('data-jurusan','JurusanController');
Route::resource('data-mhs','MahasiswaController');

//admin web
Route::get('/admin-page', 'AdminController@adminpage')->name('adminpage');
Route::get('/dashboard-admin', 'AdminController@dashboard')->name('dashboardAdminWeb');
Route::post('/login-adminWeb', 'AdminController@doLogin');
Route::get('/logout', 'AdminController@logout')->name('logout');
Route::get('/data-admin','AdminUKMController@show_dataadmin')->name('data-admin');
Route::get('/data-ukm','UKMController@show_dataukm')->name('data-ukm');
Route::get('/data-jurusan','JurusanController@show_datajurusan')->name('data-jurusan');
Route::get('/data-prodi','ProdiController@show_dataprodi')->name('data-prodi');
Route::get('/data-mhs', 'MahasiswaController@show_datamhs')->name('data-mhs');
Route::get('/data-pendaftaran', 'PendaftaranController@show_datadaftar')->name('data-pendaftaran');

//admin UKM
Route::get('/', 'AdminUKMController@adminUkmPage')->name('home');
Route::post('/login-adminUkm', 'AdminUKMController@doLogin');
Route::get('/logout-adminUkm', 'AdminUKMController@logout')->name('logoutUKM');

//Dashboard Admin UKM
Route::get('/dashboard-kompa', 'AdminUKMController@dashboardKompa')->name('dashboardKompa');
Route::get('/dashboard-kopen', 'AdminUKMController@dashboardKopen')->name('dashboardKopen');
Route::get('/dashboard-rpi', 'AdminUKMController@dashboardRpi')->name('dashboardRpi');
Route::get('/dashboard-popi', 'AdminUKMController@dashboardPopi')->name('dashboardPopi');
Route::get('/dashboard-folafo', 'AdminUKMController@dashboardFolafo')->name('dashboardFolafo');

//Admin UKM - KOMPA
Route::get('/data-kompa', 'AdminUKMController@data_kompa')->name('data-kompa');
Route::delete('/deleteKompa','AdminUKMController@destroyKompa')->name('deleteKompa');
//Admin UKM - KOPEN
Route::get('/data-kopen', 'AdminUKMController@data_kopen')->name('data-kopen');
Route::delete('/deleteKopen','AdminUKMController@destroyKopen')->name('deleteKopen');
//Admin UKM - RPI
Route::get('/data-rpi', 'AdminUKMController@data_rpi')->name('data-rpi');
Route::delete('/deleteRpi','AdminUKMController@destroyRpi')->name('deleteRpi');
//Admin UKM - POPI
Route::get('/data-popi', 'AdminUKMController@data_popi')->name('data-popi');
Route::delete('/deletePopi','AdminUKMController@destroyPopi')->name('deletePopi');
//Admin UKM - FOLAFO
Route::get('/data-folafo', 'AdminUKMController@data_folafo')->name('data-folafo');
Route::delete('/deleteFolafo','AdminUKMController@destroyFolafo')->name('deleteFolafo');

//API LARAVEL
Route::post('/registerApi', 'MahasiswaController@signup');
Route::post('/loginApi', 'MahasiswaController@signin');
Route::get('/getProdi', 'ProdiController@getAllProdi');
Route::get('/getMahasiswa/{nim}', 'MahasiswaController@getMahasiswa');
Route::post('/updateApi/{nim}', 'MahasiswaController@updateMhs');
Route::get('/getUKM', 'UKMController@getAllUKM');
Route::post('/daftarUKM', 'PendaftaranController@daftarUKM');

//PDF UKM
Route::get('/data-kompa/DownloadPDF', 'AdminUKMController@PdfKompa')->name('PdfKompa');
Route::get('/data-kopen/DownloadPDF', 'AdminUKMController@PdfKopen')->name('PdfKopen');
Route::get('/data-rpi/DownloadPDF', 'AdminUKMController@PdfRpi')->name('PdfRpi');
Route::get('/data-popi/DownloadPDF', 'AdminUKMController@PdfPopi')->name('PdfPopi');
Route::get('/data-folafo/DownloadPDF', 'AdminUKMController@PdfFolafo')->name('PdfFolafo');

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
