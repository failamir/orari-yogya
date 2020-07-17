<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\Tanggal_kegiatan;
use Illuminate\Http\Request;

class Tanggal_kegiatanController extends Controller
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
            $tanggal_kegiatan = Tanggal_kegiatan::where('hari', 'LIKE', "%$keyword%")
                ->orWhere('tanggal', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $tanggal_kegiatan = Tanggal_kegiatan::latest()->paginate($perPage);
        }

        return view('admin.tanggal_kegiatan.index', compact('tanggal_kegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        return view('admin.tanggal_kegiatan.create');
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
// 			'hari' => 'required',
			'tanggal' => 'required'
		]);
        $requestData = $request->except('hari');
         $daftar_hari = array(
 'Sunday' => 'Minggu',
 'Monday' => 'Senin',
 'Tuesday' => 'Selasa',
 'Wednesday' => 'Rabu',
 'Thursday' => 'Kamis',
 'Friday' => 'Jumat',
 'Saturday' => 'Sabtu'
);
// $date="2012/05/03";
$namahari = date('l', strtotime($requestData['tanggal']));

$requestData['hari'] = $daftar_hari[$namahari];
        Tanggal_kegiatan::create($requestData);

        return redirect('admin/tanggal_kegiatan')->with('flash_message', 'Tanggal_kegiatan added!');
        // var_dump($requestData);
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
        $tanggal_kegiatan = Tanggal_kegiatan::findOrFail($id);

        return view('admin.tanggal_kegiatan.show', compact('tanggal_kegiatan'));
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
        $tanggal_kegiatan = Tanggal_kegiatan::findOrFail($id);

        return view('admin.tanggal_kegiatan.edit', compact('tanggal_kegiatan'));
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
// 			'hari' => 'required',
			'tanggal' => 'required'
		]);
        $requestData = $request->except('hari');
         $daftar_hari = array(
 'Sunday' => 'Minggu',
 'Monday' => 'Senin',
 'Tuesday' => 'Selasa',
 'Wednesday' => 'Rabu',
 'Thursday' => 'Kamis',
 'Friday' => 'Jumat',
 'Saturday' => 'Sabtu'
);
// $date="2012/05/03";
$namahari = date('l', strtotime($requestData['tanggal']));

$requestData['hari'] = $daftar_hari[$namahari];
        $tanggal_kegiatan = Tanggal_kegiatan::findOrFail($id);
        $tanggal_kegiatan->update($requestData);

        return redirect('admin/tanggal_kegiatan')->with('flash_message', 'Tanggal_kegiatan updated!');
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
        Tanggal_kegiatan::destroy($id);

        return redirect('admin/tanggal_kegiatan')->with('flash_message', 'Tanggal_kegiatan deleted!');
    }
}
