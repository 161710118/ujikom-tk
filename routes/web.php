<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('index1');
});

Auth::routes();

Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']],function(){
	Route::get('/home', 'HomeController@index')->name('home');
Route::resource('profil','ProfilController');
Route::resource('kategori','KategoriController');
Route::resource('fasilitas','FasilitasController');
Route::resource('galeri','GaleriController');
Route::resource('program','ProgramController');
Route::resource('guru','GuruController');
Route::resource('kategoris','KategorigaleriController');
Route::resource('kategorisfasilitas','KategorifasilitasController');
Route::resource('testimoni','TestimoniController');
Route::resource('prestasi','PrestasiController');
Route::resource('kontaks','KontakController');

});



Route::group(['prefix'=>'member','middleware'=>['auth','role:member']],
function(){



Route::get('profil','FrontendController@blog');
});



Route::get('/blog','FrontendController@blog')->name('blog');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/gurus','GuruController@index')->name('gurus');


//Frontend
Route::get('/beranda','FrontendController@index')->name('index');
Route::get('/guru','FrontendController@guru')->name('guru');
Route::get('/galeri','FrontendController@galery')->name('galery');
Route::get('/testimoni','FrontendController@testimoni')->name('testimoni');
Route::get('/berita','FrontendController@blog')->name('berita');
Route::get('/berita/{program}','FrontendController@blogshow')->name('berita');
Route::get('berita/kategori/{kategoris}', 'FrontendController@artikelkategori');
Route::get('/fasilitas','FrontendController@fasilitas')->name('fasilitas');
Route::get('/profil','FrontendController@profil')->name('profil');

Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);


// Route::get('/contact', function () {
//     return view('frontend.contact');
// });
Route::get('/kontak', function () {
    return view('frontend.kontak');
});