<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\contactUS;
use Mail;
 
class ContactUSController extends Controller
{
   public function contactUS()
{
return view('contactUS');
} 
   /** * Show the application dashboard. * * @return \Illuminate\Http\Response */
   public function contactUSPost(Request $request) 
   {
    $this->validate($request, [
     'name' => 'required',
     'email' => 'required|email',
     'message' => 'required'
      ]);
    contactUS::create($request->all()); 
   
    Mail::send('email',
       array(
           'name' => $request->get('name'),
           'email' => $request->get('email'),
           'user_message' => $request->get('message')
       ), function($message)
   {
       $message->from('saquib.gt@gmail.com');
       $message->to('mjunikaberli010601@gmail.com', 'Admin')->subject('Cloudways Feedback');

   });
 
    return back()->with('success', 'Terima Kasih Tanggapannya!'); 
   }

   public function index()
   {
    $kontaks = COntactUS::all();
    return view('kontak.index',compact('kontaks'));
   }

    public function destroy($id)
    {
        $kontaks = contactUS::findOrFail($id);
         $kontaks->delete();
        return redirect()->route('kontaks.index');  
    }
}