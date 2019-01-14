<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;   
use App\Fasilitas;
use App\Galeri;
use App\Guru;
use App\Program;
use App\Kategorigaleri;
use App\Testimoni;
use App\Prestasi;
use App\Kategorifasilitas;
use App\Kategori; 
 class FrontendController extends Controller { 
    
  // public function blog()     
  // {     $profils = Profil::All()->paginate(6);     
  //   return view('frontend.blog.index',compact('profils'));      
  // }

    public function singleblog($id)
    {
    	$profils = Profil::findOrFail($id);
    	return view('frontend.blog.single',compact('profils')); 
    }


    public function index()
    {   
        $program = Program::all();
        $gurus = Guru::all();
        $testimoni = Testimoni::all();
        $prestasi = Prestasi::all();
        return view('index1',compact('program','gurus','testimoni','prestasi'));
    }

    public function guru()
    {
        $gurus = Guru::all();
        return view('frontend.guru',compact('gurus'));
    }
    public function galery()
    {
        $kategori = Kategorigaleri::all();
        $galeris = Galeri::all();
        $kategorig = Galeri::all();
        return view('frontend.galery',compact('kategorig','kategori','galeris'));
    }
     public function testimoni()
    {
        $testimoni = Testimoni::all();
        return view('frontend.testimoni',compact('testimoni'));
    }
    public function prestasi()
    {
        $prestasi = Prestasi::all();
        return view('frontend.prestasi',compact('prestasi'));
    }
     public function blog()
    {
         // $search = $request->get('search');
        // $a = Artikel::where('judul','LIKE','%'.$search.'%')->orderBy('created_at','desc')->paginate(2);
        $program = Program::all();
        return view('frontend.blog.blog-home',compact('program','a','search'));
    }
     public function blogshow(Program $program)
    {
         $previous = Program::where('id', '<', $program->id)->orderBy('id', 'desc')->first();
        $next = Program::where('id', '>', $program->id)->orderBy('id')->first();
        // $artikels = Artikel::findOrFail($id);
        return view('frontend.blog.blog-show',compact('program','previous','next'));
    }
     public function artikelkategori(Kategori $kategoris)
    {
        $program = $kategoris->Program()->latest()->paginate(5);
        return view('frontend.blog.blog-home', compact('program'));
    }
     public function fasilitas()
    {
        $kategori = Kategorifasilitas::all();
        $fasilitas = Fasilitas::all();
        $kategorig = Fasilitas::all();
        return view('frontend.fasilitas',compact('kategorig','kategori','fasilitas'));
    }
    public function profil()
    {
        return view('frontend.profil');
    }
}
