<?php

namespace App\Http\Controllers;

use App\Fasilitas;
use File;
use App\Kategorifasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitas = fasilitas::with('Kategorifasilitas')->get();
        return view('fasilitas.index',compact('fasilitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fasilitas = fasilitas::all();
         $kategori = Kategorifasilitas::all();
        return view('fasilitas.create',compact('fasilitas','kategori'));
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
         'nama' => 'required|',
         'gambar' =>'required|',
         'kategori_id' => 'required|'
          
       ]);

       $fasilitas = new Fasilitas;
       $fasilitas->nama =$request->nama;



       if($request->hasFile('gambar')){
        $file = $request->file('gambar');
        $destinationPath = public_path().'/assets/images/avatar/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $uploadSuccess = $file->move($destinationPath, $filename);
        $fasilitas->gambar = $filename;
               }

       $fasilitas->kategori_id = $request->kategori_id;  
       $fasilitas->save();
       return redirect()->route('fasilitas.index');   
         }

    /**
     * Display the specified resource.
     *
     * @param  \App\profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        $kategori = Kategorifasilitas::all();
        return view('fasilitas.edit',compact('fasilitas','kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
          'nama' => 'required|',
          'gambar' => 'required|',
          'kategori_id' => 'required|'
        ]);

        $fasilitas= Fasilitas::findOrFail($id);
        $fasilitas->nama = $request->nama;
          
          if($request->hasfile('gambar')){
            $file = $request->file('gambar');
            $destinationPath = public_path().'/assets/images/avatar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);

            if($fasilitas->gambar){
                $old_foto = $fasilitas->gambar;
                $filepath = public_path(). DIRECTORY_SEPARATOR . '/assets/images/avatar'. DIRECTORY_SEPARATOR . $fasilitas->gambar;
                try{
                    File::delete($filepath);
                }catch (FileNotFoundException $e){
                
                 // File sudah dihapus/tidak ada
                }  
            }

            $fasilitas->gambar = $filename;
          }
            $fasilitas->kategori_id = $request->kategori_id;
        $fasilitas->save();   
        return redirect()->route('fasilitas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        $fasilitas->delete();
        return redirect()->route('fasilitas.index');
    }
}
