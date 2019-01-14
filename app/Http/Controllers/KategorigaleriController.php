<?php

namespace App\Http\Controllers;

use App\Kategorigaleri;
use Illuminate\Http\Request;

class KategorigaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $kategori = Kategorigaleri::all();
        // dd($kategori);
        return view('kg.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('kg.create');
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
           'nama_kategori' => 'required|max:255'
            ]);

        $kategori = new Kategorigaleri;
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();
        return redirect()->route('kategoris.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kategorigaleri  $kategorigaleri
     * @return \Illuminate\Http\Response
     */
    public function show(Kategorigaleri $kategorigaleri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kategorigaleri  $kategorigaleri
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategorigaleri::findOrFail($id);
        return view('kg.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kategorigaleri  $kategorigaleri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,[
        'nama_kategori' => 'required|max:255'
        ]);
     
        $kategori = Kategorigaleri::findOrFail($id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();
        return redirect()->route('kategoris.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kategorigaleri  $kategorigaleri
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = Kategorigaleri::findOrFail($id);
        $kategori->delete();
        return redirect()->route('kategoris.index');
    }
}
