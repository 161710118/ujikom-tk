<?php

namespace App\Http\Controllers;

use App\Testimoni;
use File;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $testimoni = Testimoni::all();
        return view('testimoni.index',compact('testimoni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimoni.create');
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
         'nama' =>'required|',
         'deskripsi' =>'required|',
       ]);


       $testimoni = new Testimoni;
       $testimoni->foto =$request->foto;
       $testimoni->nama =$request->nama;
       $testimoni->deskripsi =$request->deskripsi;

         if($request->hasFile('foto')){
        $file = $request->file('foto');
        $destinationPath = public_path().'/assets/images/avatar/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $uploadSuccess = $file->move($destinationPath, $filename);
        $testimoni->foto = $filename;
               }


       $testimoni->save();
       return redirect()->route('testimoni.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function show(Testimoni $testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $testimoni = Testimoni::findOrFail($id);
        return view('testimoni.edit',compact('testimoni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
          'foto' => 'required|',
          'nama' => 'required|',
          'deskripsi' => 'required|'
           ]);

        $testimoni= Testimoni::findOrFail($id);
        $testimoni->foto = $request->foto;
        $testimoni->nama = $request->nama;
        $testimoni->deskripsi = $request->deskripsi;
        

        if($request->hasfile('foto')){
            $file = $request->file('foto');
            $destinationPath = public_path().'/assets/images/avatar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);

             if($testimoni->foto){
                $old_foto = $testimoni->foto;
                $filepath = public_path(). DIRECTORY_SEPARATOR . '/assets/images/avatar'. DIRECTORY_SEPARATOR . $testimoni->foto;
                try{
                    File::delete($filepath);
                }catch (FileNotFoundException $e){

               }  
            }
            $testimoni->foto = $filename;
          }
          
          $testimoni->save();   
        return redirect()->route('testimoni.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimoni = Testimoni::findOrFail($id);
        $testimoni->delete();
        return redirect()->route('testimoni.index');
    }
}
