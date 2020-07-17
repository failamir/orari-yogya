<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beritum;
use App\Download;
use App\Kategori;
use App\Landing;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function welcome()
    {
        $berita = DB::table('beritas')
                ->offset(0)
                ->limit(6)
                ->where('status', 'publish')
                ->get();
        $download_p = DB::table('downloads')
            // ->join('kategoris', 'downloads.id', '=', 'kategoris.id')
            // ->join('orders', 'users.id', '=', 'orders.user_id')
            // ->select('*')
            ->where('kategori', '1')
            ->get();
        $download_cw = DB::table('downloads')
            ->where('kategori', '2')
            ->get();
        $download_ft = DB::table('downloads')
            ->where('kategori', '3')
            ->get();
        $download_m = DB::table('downloads')
            ->where('kategori', '4')
            ->get(); 
        $kegiatan = DB::table('tanggal_kegiatans')
            // ->rightJoin('waktu_kegiatans', 'tanggal_kegiatans.id', '=', 'waktu_kegiatans.id')
            // ->join('orders', 'users.id', '=', 'orders.user_id')
            // ->select('*')
            // ->where('kategori', '1')
            ->get();
        $waktu_kegiatan = DB::table('waktu_kegiatans')
            // ->rightJoin('waktu_kegiatans', 'tanggal_kegiatans.id', '=', 'waktu_kegiatans.id')
            // ->join('orders', 'users.id', '=', 'orders.user_id')
            // ->select('*')
            // ->where('kategori', '1')
            ->get();
            $agenda = DB::table('agendas')
            ->get();
            $download_data_phone=$download_p;
            $download_data_cw=$download_cw;
            $download_data_ft=$download_ft;
            $download_data_m=$download_m;
            $berita_data=$berita;
            $kegiatan_data=$kegiatan;
            $wk=$waktu_kegiatan;
        
        $row = Landing::findOrFail(1);
        if ($row){
            $id=$row->id;
			$nama_perusahaan=$row->nama_perusahaan;
			$deskripsi=$row->deskripsi;
			$tentang=$row->tentang;
			$visi=$row->visi;
			$misi=$row->misi;
			$status_juknis=$row->status_juknis;
			$juknis=$row->juknis;
			$status_izin=$row->status_izin;
			$izin=$row->izin;
			$alamat=$row->alamat;
			$email=$row->email;
			$telpon=$row->telpon;
			$img_about = $row->gambar_tentang;
            $link_video = $row->link_video;
        }
            return view('welcome', compact('download_data_phone','download_data_cw','download_data_ft','download_data_m',
            'berita_data','kegiatan_data','wk','nama_perusahaan','deskripsi','tentang',
			'visi','misi','juknis','izin','alamat','email','telpon','img_about','link_video','status_juknis','status_izin','agenda'));
        // var_dump($this->data);
        // var_dump($data);
    }
}
