<?php

namespace App\Http\Controllers;

use App\Prestasi;
use File;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $prestasi = Prestasi::all();
        return view('prestasi.index',compact('prestasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prestasi.create');
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
         'foto' => 'required|',
         'tgl' =>'required|',
         'nama' =>'required|',
         'deskripsi' =>'required|',
       ]);

       $prestasi = new Prestasi;
       $prestasi->foto =$request->foto;
       $prestasi->tgl =$request->tgl;
       $prestasi->nama =$request->nama;
       $prestasi->deskripsi =$request->deskripsi;

       if($request->hasFile('foto')){
        $file = $request->file('foto');
        $destinationPath = public_path().'/assets/images/avatar/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $uploadSuccess = $file->move($destinationPath, $filename);
        $prestasi->foto = $filename;
               }

       $prestasi->save();
       return redirect()->route('prestasi.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function show(Prestasi $prestasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('prestasi.edit',compact('prestasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,[
          'foto' => 'required|',
          'tgl' => 'required|',
          'nama' => 'required|',
          'deskripsi' => 'required|'
        ]);

        $prestasi= Prestasi::findOrFail($id);
        $prestasi->foto = $request->foto;
        $prestasi->tgl = $request->tgl;
        $prestasi->nama = $request->nama;
        $prestasi->deskripsi = $request->deskripsi;

        if($request->hasfile('foto')){
            $file = $request->file('foto');
            $destinationPath = public_path().'/assets/images/avatar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);

            if($prestasi->foto){
                $old_foto = $prestasi->foto;
                $filepath = public_path(). DIRECTORY_SEPARATOR . '/assets/images/avatar'. DIRECTORY_SEPARATOR . $prestasi->foto;
                try{
                    File::delete($filepath);
                }catch (FileNotFoundException $e){

               }  
            }
            $prestasi->foto = $filename;
          }

           $prestasi->save();   
        return redirect()->route('prestasi.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $prestasi = Prestasi::findOrFail($id);
        $prestasi->delete();
        return redirect()->route('prestasi.index');
    }
}
