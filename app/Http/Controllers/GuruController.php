<?php

namespace App\Http\Controllers;

use App\Guru;
use File;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gurus = Guru::all();
        return view('guru.index',compact('gurus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru.create');
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
         'gambar' => 'required|',
         'nama' =>'required|',
         'jabatan' =>'required|'
       ]);

       $gurus = new Guru;
       $gurus->gambar =$request->gambar;
       $gurus->nama =$request->nama;
       $gurus->jabatan =$request->jabatan;

       if($request->hasFile('gambar')){
        $file = $request->file('gambar');
        $destinationPath = public_path().'/assets/images/avatar/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $uploadSuccess = $file->move($destinationPath, $filename);
        $gurus->gambar = $filename;
               }

        

       $gurus->save();
       return redirect()->route('guru.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
     //   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gurus = Guru::findOrFail($id);
        return view('guru.edit',compact('gurus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request,[
          'gambar' => 'required|',
          'nama' => 'required|',
          'jabatan' => 'required|'
        ]);

        $gurus= Guru::findOrFail($id);
        $gurus->gambar = $request->gambar;
         $gurus->nama = $request->nama;
         $gurus->jabatan = $request->jabatan;
          
          if($request->hasfile('gambar')){
            $file = $request->file('gambar');
            $destinationPath = public_path().'/assets/images/avatar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);

            if($gurus->gambar){
                $old_foto = $gurus->gambar;
                $filepath = public_path(). DIRECTORY_SEPARATOR . '/assets/images/avatar'. DIRECTORY_SEPARATOR . $gurus->gambar;
                try{
                    File::delete($filepath);
                }catch (FileNotFoundException $e){
                
                 // File sudah dihapus/tidak ada
                }  
            }
            $gurus->gambar = $filename;
          }
          
        $gurus->save();   
        return redirect()->route('guru.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $gurus = Guru::findOrFail($id);
        $gurus->delete();
        return redirect()->route('guru.index');
    }
}
