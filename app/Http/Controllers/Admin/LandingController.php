<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Landing;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        // $keyword = $request->get('search');
        // $perPage = 25;

        // if (!empty($keyword)) {
        //     $landing = Landing::where('nama_perusahaan', 'LIKE', "%$keyword%")
        //         ->orWhere('deskripsi', 'LIKE', "%$keyword%")
        //         ->orWhere('tentang', 'LIKE', "%$keyword%")
        //         ->orWhere('visi', 'LIKE', "%$keyword%")
        //         ->orWhere('misi', 'LIKE', "%$keyword%")
        //         ->orWhere('juknis', 'LIKE', "%$keyword%")
        //         ->orWhere('izin', 'LIKE', "%$keyword%")
        //         ->orWhere('alamat', 'LIKE', "%$keyword%")
        //         ->orWhere('email', 'LIKE', "%$keyword%")
        //         ->orWhere('telpon', 'LIKE', "%$keyword%")
        //         ->orWhere('gambar_tentang', 'LIKE', "%$keyword%")
        //         ->orWhere('link_video', 'LIKE', "%$keyword%")
        //         ->latest()->paginate($perPage);
        // } else {
        //     $landing = Landing::latest()->paginate($perPage);
        // }

        // return view('admin.landing.index', compact('landing'));
        return redirect('/admin/landing/1');
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
        return view('admin.landing.create');
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
			'nama_perusahaan' => 'required',
			'deskripsi' => 'required',
			'tentang' => 'required',
			'visi' => 'required',
			'misi' => 'required',
			'juknis' => 'required | mimes:pdf',
			'izin' => 'required | mimes:pdf',
			'alamat' => 'required',
			'email' => 'required',
			'telpon' => 'required',
			'gambar_tentang' => 'required | mimes:jpg,jpeg,png,bmp,tiff |max:4096',
			'link_video' => 'required'
            
        ],
            $messages = [
                    'required' => 'The :attribute field is required.',
                    'mimes' => 'file juknis and izin special call Only pdf are allowed. Gambar tentang Only image are allowed.',
                    
                ]
            );
        // $requestData = $request->all();
        $img = $request->file('gambar_tentang');
        $juknis = $request->file('juknis');
        $izin = $request->file('izin');
                $requestData = $request->except('gambar_tentang','juknis','izin');
                if($img){
                $img_path = $img->store('img', 'public');
            
                $requestData['gambar_tentang'] = $img_path;
                }
                if($juknis){
                $img_path = $img->store('file', 'public');
            
                $requestData['juknis'] = $img_path;
                }
                if($izin){
                $img_path = $img->store('file', 'public');
            
                $requestData['izin'] = $img_path;
                }
        
        Landing::create($requestData);

        return redirect('admin/landing')->with('flash_message', 'Landing added!');
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
        $landing = Landing::findOrFail($id);

        return view('admin.landing.show', compact('landing'));
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
        $landing = Landing::findOrFail($id);

        return view('admin.landing.edit', compact('landing'));
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
			'nama_perusahaan' => 'required',
			'deskripsi' => 'required',
			'tentang' => 'required',
			'visi' => 'required',
			'misi' => 'required',
			'juknis' => ' mimes:pdf',
			'izin' => ' mimes:pdf',
			'alamat' => 'required',
			'email' => 'required',
			'telpon' => 'required',
			'gambar_tentang' => ' mimes:jpg,jpeg,png,bmp,tiff |max:4096',
			'link_video' => 'required'
            
        ],
            $messages = [
                    'required' => 'The :attribute field is required.',
                    'mimes' => 'file juknis and izin special call Only pdf are allowed. Gambar tentang Only image are allowed.',
                    
                ]
            );
        // $requestData = $request->all();
        
        $landing = Landing::findOrFail($id);
        $requestData = $request->except('gambar','juknis','izin');
                
                $new_img = $request->file('gambar_tentang');
                $new_juknis = $request->file('juknis');
                $new_izin = $request->file('izin');
                
                if($new_img){
                    if($landing->gambar_tentang && file_exists(storage_path('app/public/' . $landing->gambar_tentang))){
                        \Storage::delete('public/'. $landing->gambar_tentang);
                    }

                    $new_img_path = $new_img->store('img', 'public');

                    $requestData['gambar_tentang'] = $new_img_path;
                }
                if($new_juknis){
                    if($landing->juknis && file_exists(storage_path('app/public/' . $landing->juknis))){
                        \Storage::delete('public/'. $landing->juknis);
                    }

                    $new_juknis_path = $new_juknis->store('file', 'public');

                    $requestData['juknis'] = $new_juknis_path;
                }
                if($new_izin){
                    if($landing->izin && file_exists(storage_path('app/public/' . $landing->izin))){
                        \Storage::delete('public/'. $landing->izin);
                    }

                    $new_izin_path = $new_izin->store('file', 'public');

                    $requestData['izin'] = $new_izin_path;
                }
        $landing->update($requestData);
        // var_dump($requestData);

        return redirect('admin/landing')->with('flash_message', 'Landing updated!');
    }

    public function publish_juknis($id)
    {
        if (Auth::check() == false){
            return redirect('/login');
        }
        $landing = Landing::findOrFail($id);
        $requestData['status_juknis'] = 'publish';
        $landing->update($requestData);
        return redirect('admin/landing')->with('flash_message', 'Landing updated!');
        // var_dump($requestData);
    }
    
    public function unpublish_juknis($id)
    {
        if (Auth::check() == false){
            return redirect('/login');
        }
        $landing = Landing::findOrFail($id);
        $requestData['status_juknis'] = 'unpublish';
        $landing->update($requestData);
        return redirect('admin/landing')->with('flash_message', 'Landing updated!');
    }
    
    public function publish_izin($id)
    {
        if (Auth::check() == false){
            return redirect('/login');
        }
        $landing = Landing::findOrFail($id);
        $requestData['status_izin'] = 'publish';
        $landing->update($requestData);
        return redirect('admin/landing')->with('flash_message', 'Landing updated!');
        // var_dump($requestData);
    }
    
    public function unpublish_izin($id)
    {
        if (Auth::check() == false){
            return redirect('/login');
        }
        $landing = Landing::findOrFail($id);
        $requestData['status_izin'] = 'unpublish';
        $landing->update($requestData);
        return redirect('admin/landing')->with('flash_message', 'Landing updated!');
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
        // Landing::destroy($id);

        return redirect('admin/landing')->with('flash_message', 'Landing cannot be deleted!');
    }
}
