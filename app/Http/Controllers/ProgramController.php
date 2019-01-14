<?php

namespace App\Http\Controllers;

use App\Program;
use App\Kategori;
use File;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $program = Program::with('Kategori')->get();
        return view('program.index',compact('program'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::all();
        return view('program.create',compact('kategoris'));
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
         'judul' => 'required|',
         'deskripsi' =>'required|',
          'gambar' =>'required|',
          'nama_penulis' => 'required|',
          'kategori_id'=>'required'
       ]);

       $program = new Program;
       $program->judul =$request->judul;
       $program->deskripsi =$request->deskripsi;

       if($request->hasFile('gambar')){
        $file = $request->file('gambar');
        $destinationPath = public_path().'/assets/images/avatar/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $uploadSuccess = $file->move($destinationPath, $filename);
        $program->gambar = $filename;
               }
       $program->nama_penulis = $request->nama_penulis;
       $program->kategori_id = $request->kategori_id;
       $program->slug =str_slug($request->judul, '-');
       $program->save();
       return redirect()->route('program.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $program = Program::findOrFail($id);
        $kategoris = Kategori::all();
        $selectedKategori = Program::findOrFail($id)->kategori_id;
        return view('program.edit',compact('program','kategoris','selectedKategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
                $this->validate($request,[
          'judul' => 'required|',
          'deskripsi' => 'required|',
          'gambar' => 'required|',
          'nama_penulis' => 'required|',
          'kategori_id' => 'required'
        ]);

        $program= Program::findOrFail($id);
        $program->judul = $request->judul;
         $program->deskripsi = $request->deskripsi;          
          if($request->hasfile('gambar')){
            $file = $request->file('gambar');
            $destinationPath = public_path().'/assets/images/avatar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);

            if($program->gambar){
                $old_foto = $program->gambar;
                $filepath = public_path(). DIRECTORY_SEPARATOR . '/assets/images/avatar'. DIRECTORY_SEPARATOR . $program->gambar;
                try{
                    File::delete($filepath);
                }catch (FileNotFoundException $e){
                
                 // File sudah dihapus/tidak ada
                }  
            }
            $program->gambar = $filename;
          }
        $program->nama_penulis = $request->nama_penulis;
        $program->kategori_id = $request->kategori_id;  
        $program->slug =str_slug($request->judul, '-');
        $program->save();   
        return redirect()->route('program.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program = Program::findOrFail($id);
       if($program->gambar){
                $old_foto = $program->gambar;
                $filepath = public_path(). DIRECTORY_SEPARATOR . '/assets/images/avatar/'. DIRECTORY_SEPARATOR . $program->gambar;
                try{
                    File::delete($filepath);
                }catch (FileNotFoundException $e){
                
                 // File sudah dihapus/tidak ada
                }  
            } 
        $program->delete();

        return redirect()->route('program.index');

            }
}
