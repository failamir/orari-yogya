<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Beritum;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        if (Auth::check() == false){
            return redirect('/login');
        }
        $keyword = $request->get('search');
        $perPage = 10;

        if (!empty($keyword)) {
            $berita = Beritum::where('judul', 'LIKE', "%$keyword%")
                ->orWhere('konten', 'LIKE', "%$keyword%")
                ->orWhere('tanggal', 'LIKE', "%$keyword%")
                ->orWhere('gambar', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $berita = Beritum::latest()->paginate($perPage);
        }

        return view('admin.berita.index', compact('berita'));
        // var_dump(Auth::check());
    }

    public function Lihat_Berita(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 9;

        if (!empty($keyword)) {
            $berita = Beritum::where('judul', 'LIKE', "%$keyword%")
                ->orWhere('konten', 'LIKE', "%$keyword%")
                ->orWhere('tanggal', 'LIKE', "%$keyword%")
                ->orWhere('gambar', 'LIKE', "%$keyword%")
                ->where('status','publish')
                ->latest()->paginate($perPage);
        } else {
            $berita = Beritum::latest()->where('status','publish')->paginate($perPage);
        }

        return view('lihat_berita', compact('berita'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.berita.create');
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
        if (Auth::check() == false){
            redirect('/');
        }

        $this->validate($request, [
			'judul' => 'required',
			'konten' => 'required',
            'tanggal' => 'required',
            'gambar' => 'mimes:jpeg,png,bmp,tiff |max:4096'
        ],
            $messages = [
                    'required' => 'The :attribute field is required.',
                    'mimes' => 'gambar Only jpeg, png, bmp,tiff are allowed.'
                ]
            );
        // $this->validate($request, [
        //     'photo' => 'mimes:jpeg,png,bmp,tiff |max:4096',
        // ],
        //     $messages = [
        //         'required' => 'The :attribute field is required.',
        //         'mimes' => 'Only jpeg, png, bmp,tiff are allowed.'
        //     ]
        // );
        // $requestData = $request->all();
                $img = $request->file('gambar');
                $requestData = $request->except('gambar');
                if($img){
                $img_path = $img->store('img_berita', 'public');
            
                $requestData['gambar'] = $img_path;
                }
        
        Beritum::create($requestData);

        return redirect('admin/berita')->with('flash_message', 'Berita added!');
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
        $beritum = Beritum::findOrFail($id);

        return view('admin.berita.show', compact('beritum'));
    }

    public function detail_berita($id)
    {
        $row = Beritum::findOrFail($id);
        if ($row) {
            $id = $row->id;
            $judul = $row->judul;
            $isi = $row->konten;
            $date = $row->tanggal;
            $gambar = $row->gambar;
        }

        return view('detail_berita', compact('id','judul','isi','date','gambar'));
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
        $beritum = Beritum::findOrFail($id);

        return view('admin.berita.edit', compact('beritum'));
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
			'judul' => 'required',
			'konten' => 'required',
			'tanggal' => 'required',
            'gambar' => 'mimes:jpeg,png,bmp,tiff |max:4096'
        ],
            $messages = [
                    'required' => 'The :attribute field is required.',
                    'mimes' => 'gambar Only jpeg, png, bmp,tiff are allowed.'
                ]
            );
        // $requestData = $request->all();
        $beritum = Beritum::findOrFail($id);
        $requestData = $request->except('gambar');
                
                $new_img = $request->file('gambar');

                if($new_img){
                    if($beritum->gambar && file_exists(storage_path('app/public/' . $beritum->gambar))){
                        \Storage::delete('public/'. $beritum->gambar);
                    }

                    $new_img_path = $new_img->store('img_berita', 'public');

                    $requestData['gambar'] = $new_img_path;
                }
        
        $beritum->update($requestData);

        return redirect('admin/berita')->with('flash_message', 'Berita updated!');
    }
    
    public function publish($id)
    {
        $beritum = Beritum::findOrFail($id);
        $requestData['status'] = 'publish';
        $beritum->update($requestData);
        return redirect('admin/berita')->with('flash_message', 'Berita updated!');
        // var_dump($requestData);
    }
    
    public function unpublish($id)
    {
        $beritum = Beritum::findOrFail($id);
        $requestData['status'] = 'unpublish';
        $beritum->update($requestData);
        return redirect('admin/berita')->with('flash_message', 'Berita updated!');
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
        Beritum::destroy($id);

        return redirect('admin/berita')->with('flash_message', 'Berita deleted!');
    }
}
