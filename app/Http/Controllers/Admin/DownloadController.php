<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Download;
use DB;
use App\kategori; 
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        // DB::table('users')
        //     ->join('contacts', 'users.id', '=', 'contacts.user_id')
        //     ->join('orders', 'users.id', '=', 'orders.user_id')
        //     ->select('users.id', 'contacts.phone', 'orders.price')
        //     ->get();
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $download = Download::where('callsign', 'LIKE', "%$keyword%")
                ->orWhere('checkin', 'LIKE', "%$keyword%")
                ->orWhere('kategori', 'LIKE', "%$keyword%")
                ->orWhere('counter', 'LIKE', "%$keyword%")
                ->orWhere('file', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $download = Download::latest()->paginate($perPage);
            // $download = DB::table('downloads')
            // ->join('kategoris', 'downloads.id', '=', 'kategoris.id')
            // // ->join('orders', 'users.id', '=', 'orders.user_id')
            // ->select('*')
            // ->get();
        }

        return view('admin.download.index', compact('download'));
        // var_dump($download);
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
        $kat = DB::table('kategoris')
            // ->where('instructors.Viewable','=', 1)
            // ->select(DB::raw('concat (FirstName," ",LastName) as FullName, id'));
            ->select(DB::raw('concat (nama) as FullName, id'));
            

        $katOptions = array('' => 'Select Kategori') + $kat->pluck('FullName', 'id')->toArray();
        // $kat = Kategori::all('nama'); 
        $tanggal = null;
        $selected = null;
        return view('admin.download.create',compact('katOptions','tanggal','selected'));
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
			'callsign' => 'required',
			'checkin' => 'required',
			'kategori' => 'required',
			'file' => 'required | mimes:pdf'
            
        ],
            $messages = [
                    'required' => 'The :attribute field is required.',
                    'mimes' => 'file Only pdf are allowed.'
                ]
            );
        // $requestData = $request->all();
                $img = $request->file('file');
                $requestData = $request->except('file');
                if($img){
                $img_path = $img->store('file', 'public');
            
                $requestData['file'] = $img_path;
                }
                // if ($requestData['counter'] == null){
                $requestData['counter'] = 0;
                // }
        Download::create($requestData);

        return redirect('admin/download')->with('flash_message', 'Download added!');
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
        $download = Download::findOrFail($id);

        return view('admin.download.show', compact('download'));
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
        $download = Download::findOrFail($id);
        $kat = DB::table('kategoris')
            // ->where('instructors.Viewable','=', 1)
            // ->select(DB::raw('concat (FirstName," ",LastName) as FullName, id'));
            ->select(DB::raw('concat (nama) as FullName, id'));
            

        $katOptions = array('' => 'Select Kategori') + $kat->pluck('FullName', 'id')->toArray();
        $selected = $download->kategori;
        $tanggal = $download->checkin;
        return view('admin.download.edit', compact('download','katOptions','selected','tanggal'));
        // var_dump($download->kategori);
    }

    public function count($id,$isna,$file)
    {
        $download = Download::findOrFail($id);
        $requestData['counter'] = $download->counter + 1;
        $download->update($requestData);
        return redirect('storage/file/'. $file);
        // return view('admin.download.edit', compact('download','katOptions','selected','tanggal'));
        // var_dump($requestData['counter']);
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
			'callsign' => 'required',
			'checkin' => 'required',
			'kategori' => 'required',
			'file' => 'required | mimes:pdf'
            
        ],
            $messages = [
                    'required' => 'The :attribute field is required.',
                    'mimes' => 'file Only pdf are allowed.'
                ]
            );
        // $requestData = $request->all();
        
        $download = Download::findOrFail($id);
        $requestData = $request->except('gambar');
                
                $new_img = $request->file('file');

                if($new_img){
                    if($download->file && file_exists(storage_path('app/public/' . $download->file))){
                        \Storage::delete('public/'. $download->file);
                    }

                    $new_img_path = $new_img->store('file', 'public');

                    $requestData['file'] = $new_img_path;
                }
        $download->update($requestData);

        return redirect('admin/download')->with('flash_message', 'Download updated!');
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
        Download::destroy($id);

        return redirect('admin/download')->with('flash_message', 'Download deleted!');
    }
}
