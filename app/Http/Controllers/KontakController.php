<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUS;
class KontakController extends Controller
{
	public function index()
	{
 $kontaks = ContactUS::all();
 return view('kontak.index',compact('kontaks'));
}
public function destroy($id)
    {
        $kontaks = contactUS::findOrFail($id);
         $kontaks->delete();
        return redirect()->route('kontaks.index');  
    }
}
