<?php

namespace App\Http\Controllers;

use App\Kategorifasilitas;
use Illuminate\Http\Request;

class KategorifasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategorifasilitas::all();
        return view('kf.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('kf.create');
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

        $kategori = new Kategorifasilitas;
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();
        return redirect()->route('kategorisfasilitas.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kategorifasilitas  $kategorifasilitas
     * @return \Illuminate\Http\Response
     */
    public function show(Kategorifasilitas $kategorifasilitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kategorifasilitas  $kategorifasilitas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategorifasilitas::findOrFail($id);
        return view('kf.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kategorifasilitas  $kategorifasilitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
        'nama_kategori' => 'required|max:255'
        ]);

        $kategori = Kategorifasilitas::findOrFail($id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();
        return redirect()->route('kategorisfasilitas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kategorifasilitas  $kategorifasilitas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $kategori = Kategorifasilitas::findOrFail($id);
        $kategori->delete();
        return redirect()->route('kategorisfasilitas.index');
    }
}
