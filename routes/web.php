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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomeController@welcome');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin', 'Admin\AdminController@index');
// Route::group(['middleware' => 'auth'], function () {
//     if (Auth::check()) {
//         if(Auth::user()->role == "manager"){
//             Route::get('/','ManagerController@index');
//         }
//         else if(Auth::user()->role == "rater"){
//             Route::get('/','RaterController@index');
//         }
//     }
// });
// Route::group(array('admin' => 'auth'), function()
// {
//     if(Auth::check()){
//     Route::resource('admin/roles', 'Admin\RolesController');
//     }else{
//         return 'you must login first';
//     }
// });

Route::resource('admin/roles', 'Admin\RolesController');
Route::resource('admin/permissions', 'Admin\PermissionsController');
Route::resource('admin/users', 'Admin\UsersController');
Route::resource('admin/pages', 'Admin\PagesController');
Route::resource('admin/activitylogs', 'Admin\ActivityLogsController')->only([
    'index', 'show', 'destroy'
]);
Route::resource('admin/settings', 'Admin\SettingsController');
Route::get('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
Route::post('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);

Route::resource('admin/landing', 'Admin\\LandingController');
Route::resource('admin/kategori', 'Admin\\KategoriController');
Route::resource('admin/download', 'Admin\\DownloadController');
Route::resource('admin/berita', 'Admin\\BeritaController');
Route::resource('admin/tanggal_kegiatan', 'Admin\\Tanggal_kegiatanController');
Route::resource('admin/waktu_kegiatan', 'Admin\\Waktu_kegiatanController');
// Route::get('berita/detail_berita/{id}', function ($id) {
//     return 'User '.$id;
// });
Route::get('/Berita/Lihat_Berita/', 'Admin\\BeritaController@lihat_berita')->name('lihat_berita');
Route::get('/Berita/detail_berita/{id}',['uses'=>'Admin\\BeritaController@detail_berita'])->name('detail_berita');
Route::get('/Download/count/{id}/{isna}/{file}',['uses'=>'Admin\\DownloadController@count'])->name('download_file');
Route::get('/admin/berita/publish/{id}',['uses'=>'Admin\\BeritaController@publish'])->name('publish berita');
Route::get('/admin/berita/unpublish/{id}',['uses'=>'Admin\\BeritaController@unpublish'])->name('unpublish berita');
Route::get('/admin/landing/publish_juknis/{id}',['uses'=>'Admin\\LandingController@publish_juknis'])->name('publish juknis');
Route::get('/admin/landing/unpublish_juknis/{id}',['uses'=>'Admin\\LandingController@unpublish_juknis'])->name('unpublish juknis');
Route::get('/admin/landing/publish_izin/{id}',['uses'=>'Admin\\LandingController@publish_izin'])->name('publish izin');
Route::get('/admin/landing/unpublish_izin/{id}',['uses'=>'Admin\\LandingController@unpublish_izin'])->name('unpublish izin');
Route::resource('admin/agenda', 'Admin\\AgendaController');