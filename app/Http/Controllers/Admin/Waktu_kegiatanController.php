<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\Waktu_kegiatan;
use Illuminate\Http\Request;

class Waktu_kegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $waktu_kegiatan = Waktu_kegiatan::where('id_tanggal', 'LIKE', "%$keyword%")
                ->orWhere('mulai', 'LIKE', "%$keyword%")
                ->orWhere('selesai', 'LIKE', "%$keyword%")
                ->orWhere('detail', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $waktu_kegiatan = Waktu_kegiatan::latest()->paginate($perPage);
        }

        return view('admin.waktu_kegiatan.index', compact('waktu_kegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $tan = DB::table('tanggal_kegiatans')
            // ->where('instructors.Viewable','=', 1)
            // ->select(DB::raw('concat (FirstName," ",LastName) as FullName, id'));
            ->select(DB::raw('concat (hari," ",tanggal) as FullName, id'));
            

        $tanOptions = array('' => 'Select Tanggal') + $tan->pluck('FullName', 'id')->toArray();
        // $kat = Kategori::all('nama'); 
        $tanggal = null;
        $selected = null;
        return view('admin.waktu_kegiatan.create',compact('tanOptions','selected'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        if (Auth::check() == false){
            return redirect('/login');
        }
        $this->validate($request, [
			'id_tanggal' => 'required',
			'mulai' => 'required',
			'selesai' => 'required',
			'detail' => 'required'
		]);
        $requestData = $request->all();
        
        Waktu_kegiatan::create($requestData);

        return redirect('admin/waktu_kegiatan')->with('flash_message', 'Waktu_kegiatan added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $waktu_kegiatan = Waktu_kegiatan::findOrFail($id);

        return view('admin.waktu_kegiatan.show', compact('waktu_kegiatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $waktu_kegiatan = Waktu_kegiatan::findOrFail($id);
        $tan = DB::table('tanggal_kegiatans')
        // ->where('instructors.Viewable','=', 1)
        // ->select(DB::raw('concat (FirstName," ",LastName) as FullName, id'));
        ->select(DB::raw('concat (hari," ",tanggal) as FullName, id'));
        

    $tanOptions = array('' => 'Select Tanggal') + $tan->pluck('FullName', 'id')->toArray();
    // $kat = Kategori::all('nama'); 
    $tanggal = null;
    $selected = $waktu_kegiatan->id_tanggal;

        return view('admin.waktu_kegiatan.edit', compact('waktu_kegiatan','tanOptions','selected'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        if (Auth::check() == false){
            return redirect('/login');
        }
        $this->validate($request, [
			'id_tanggal' => 'required',
			'mulai' => 'required',
			'selesai' => 'required',
			'detail' => 'required'
		]);
        $requestData = $request->all();
        
        $waktu_kegiatan = Waktu_kegiatan::findOrFail($id);
        $waktu_kegiatan->update($requestData);

        return redirect('admin/waktu_kegiatan')->with('flash_message', 'Waktu_kegiatan updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        if (Auth::check() == false){
            return redirect('/login');
        }
        Waktu_kegiatan::destroy($id);

        return redirect('admin/waktu_kegiatan')->with('flash_message', 'Waktu_kegiatan deleted!');
    }
}
