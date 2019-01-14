<?php

namespace App\Http\Controllers;

use App\Galeri;
use Illuminate\Http\Request;
use File ;
use App\Kategorigaleri;
class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $galeris =galeri::with('Kategorigaleri')->get();
        return view('galeri.index',compact('galeris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $galeris = galeri::all();
         $kategori = Kategorigaleri::all();
        return view('galeri.create',compact('galeris','kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
          'gambar' =>'required|',
          'nama'=>'required|',
          'kategori_id' => 'required|'
       ]);

       $galeris = new Galeri;
       $galeris->gambar =$request->gambar;
       $galeris->nama=$request->nama;

       if($request->hasFile('gambar')){
        $file = $request->file('gambar');
        $destinationPath = public_path().'/assets/images/avatar/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $uploadSuccess = $file->move($destinationPath, $filename);
        $galeris->gambar = $filename;
               }

        $galeris->kategori_id = $request->kategori_id;       
       $galeris->save();
       return redirect()->route('galeri.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeris = Galeri::findOrFail($id);
        $kategori = Kategorigaleri::all();
        return view('galeri.edit',compact('galeris','kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
          'gambar' => 'required|',
          'nama' =>'required',
          'kategori_id' => 'required|'
        ]);

        $galeris= Galeri::findOrFail($id);
         $galeris->gambar = $request->gambar;
         $galeris->nama = $request->nama;
          
          if($request->hasfile('gambar')){
            $file = $request->file('gambar');
            $destinationPath = public_path().'/assets/images/avatar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);

            if($galeris->gambar){
                $old_foto = $galeris->gambar;
                $filepath = public_path(). DIRECTORY_SEPARATOR . '/assets/images/avatar'. DIRECTORY_SEPARATOR . $galeris->gambar;
                try{
                    File::delete($filepath);
                }catch (FileNotFoundException $e){
                
                 // File sudah dihapus/tidak ada
                }  
            }
            $galeris->gambar = $filename;
          }
           $galeris->kategori_id = $request->kategori_id;
        $galeris->save();   
        return redirect()->route('galeri.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeris = Galeri::findOrFail($id);
        $galeris->delete();
        return redirect()->route('galeri.index');
    }
}
