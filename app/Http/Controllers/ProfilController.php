<?php

namespace App\Http\Controllers;

use App\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profils = profil::all();
        return view('profil.index',compact('profils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profil.create');
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
         'deskripsi' =>'required|'
       ]);

       $profils = new profil;
       $profils->judul =$request->judul;
       $profils->deskripsi =$request->deskripsi;
       $profils->save();
       return redirect()->route('profil.index');   
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
        $profils = profil::findOrFail($id);
        return view('profil.edit',compact('profils'));
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
          'judul' => 'required|',
          'deskripsi' => 'required|'
        ]);

        $profils= profil::findOrFail($id);
        $profils->judul = $request->judul;
         $profils->deskripsi = $request->deskripsi;
        $profils->save();   
        return redirect()->route('profil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profils = profil::findOrFail($id);
        $profils->delete();
        return redirect()->route('profil.index');
    }
}
