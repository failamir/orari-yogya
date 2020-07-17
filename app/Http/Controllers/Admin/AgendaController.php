<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
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
            $agenda = Agenda::where('nama_agenda', 'LIKE', "%$keyword%")
                ->orWhere('deskripsi_agenda', 'LIKE', "%$keyword%")
                ->orWhere('lokasi_agenda', 'LIKE', "%$keyword%")
                ->orWhere('tanggal_mulai', 'LIKE', "%$keyword%")
                ->orWhere('jam_mulai', 'LIKE', "%$keyword%")
                ->orWhere('tanggal_selesai', 'LIKE', "%$keyword%")
                ->orWhere('jam_selesai', 'LIKE', "%$keyword%")
                ->orWhere('gambar', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $agenda = Agenda::latest()->paginate($perPage);
        }

        return view('admin.agenda.index', compact('agenda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        if (Auth::check() == false){
            return redirect('/login');
        }
        return view('admin.agenda.create');
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
        $this->validate($request, [
			'nama_agenda' => 'required',
			'deskripsi_agenda' => 'required',
			'lokasi_agenda' => 'required',
			'tanggal_mulai' => 'required',
			'jam_mulai' => 'required',
			'tanggal_selesai' => 'required',
			'jam_selesai' => 'required',
		    'gambar' => 'mimes:jpeg,png,bmp,tiff |max:4096'
        ],
            $messages = [
                    'required' => 'The :attribute field is required.',
                    'mimes' => 'gambar Only jpeg, png, bmp,tiff are allowed.'
                ]
            );
        // $requestData = $request->all();
                $img = $request->file('gambar');
                $requestData = $request->except('gambar');
                if($img){
                $img_path = $img->store('img_berita', 'public');
            
                $requestData['gambar'] = $img_path;
                }
        
        Agenda::create($requestData);

        return redirect('admin/agenda')->with('flash_message', 'Agenda added!');
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
        $agenda = Agenda::findOrFail($id);

        return view('admin.agenda.show', compact('agenda'));
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
        if (Auth::check() == false){
            return redirect('/login');
        }
        $agenda = Agenda::findOrFail($id);

        return view('admin.agenda.edit', compact('agenda'));
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
        $this->validate($request, [
			'nama_agenda' => 'required',
			'deskripsi_agenda' => 'required',
			'lokasi_agenda' => 'required',
			'tanggal_mulai' => 'required',
			'jam_mulai' => 'required',
			'tanggal_selesai' => 'required',
			'jam_selesai' => 'required',
		'gambar' => 'mimes:jpeg,png,bmp,tiff |max:4096'
        ],
            $messages = [
                    'required' => 'The :attribute field is required.',
                    'mimes' => 'gambar Only jpeg, png, bmp,tiff are allowed.'
                ]
            );
        // $requestData = $request->all();
        
        $agenda = Agenda::findOrFail($id);
        $requestData = $request->except('gambar');
                
                $new_img = $request->file('gambar');

                if($new_img){
                    if($beritum->gambar && file_exists(storage_path('app/public/' . $beritum->gambar))){
                        \Storage::delete('public/'. $beritum->gambar);
                    }

                    $new_img_path = $new_img->store('img_berita', 'public');

                    $requestData['gambar'] = $new_img_path;
                }
        $agenda->update($requestData);

        return redirect('admin/agenda')->with('flash_message', 'Agenda updated!');
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
        Agenda::destroy($id);

        return redirect('admin/agenda')->with('flash_message', 'Agenda deleted!');
    }
}
