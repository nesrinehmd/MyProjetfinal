<?php

use App\Http\Controllers\HomeController;
use App\Http\Livewire\Annonces;
use App\Http\Livewire\AnnoncesPreview;
use App\Http\Livewire\CategourieAjout;
use App\Http\Livewire\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Livewire\Profil;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SearchController;



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
    return view('App');
});

Auth::routes(['verify' => true]);

/*Route::namespace('Auth')->group(function () {
    Route::get('/login','App\Http\Controllers\Auth\RegisterController@show_login_form')->name('login');
    Route::post('/login','App\Http\Controllers\Auth\RegisterController@process_login')->name('login');
    Route::get('/register','App\Http\Controllers\Auth\RegisterController@show_signup_form')->name('register');
    Route::post('/register','App\Http\Controllers\Auth\RegisterController@process_signup');
    Route::post('/logout','App\Http\Controllers\Auth\RegisterController@logout')->name('logout');
});*/


//Connexion
Route::get('/auth/login','App\Http\Controllers\Auth\RegisterController@show_login_form')->name('login');
Route::post('/App','App\Http\Controllers\Auth\RegisterController@process_login')->name('login');
//Route::post('/auth/login','App\Http\Controllers\Auth\RegisterController@login')->name('login');
//Route::post('/auth/login','App\Http\Controllers\Auth\RegisterController@login');
/*Route::get('/login', [RegisterController::class, 'login'])
    ->middleware(['guest'])
    ->name('login');*/
/*Route::get('/auth/login', function(){
    Auth::logout();
    return Redirect::to('App');
 });*/



//Inscription
Route::get('/auth/register','App\Http\Controllers\Auth\RegisterController@show_signup_form')->name('register');
//Route::post('/auth/register','App\Http\Controllers\Auth\RegisterController@process_signup');
//Route::get('/auth/register','App\Http\Controllers\Auth\RegisterController@validator');
Route::post('/auth/register','App\Http\Controllers\Auth\RegisterController@register');
/*Route::get('/register', [RegisterController::class, 'register'])
    ->middleware(['guest'])
    ->name('register');*/


//Déconnexion
//Route::get('/','App\Http\Controllers\Auth\RegisterController@logout');
//Route::post('/','App\Http\Controllers\Auth\RegisterController@logout');
//Route::get('/','App\Http\Controllers\Auth\RegisterController@logout')->name('logout');
Route::post('/','App\Http\Controllers\Auth\RegisterController@logout')->name('logout');
//Route::get('/', [RegisterController::class, 'logout'])->name('logout');




//Verification par email
//Route::get('/signup-email', "MailController@sendSignupEmail");








/*Route::middleware(['auth:sanctum', 'verified'])->get('/welcome', function () {
        return view('welcome');
    })->name('welcome');*/

/*Route::get('home', function () {
        return view('welcome');
      })->middleware('auth');

Route::get('test', function () {
        return 'Vue de test';
      })->middleware(['verified']);

//confirmation_mot_de_passe
Route::get('test', function () {
        return 'Vue de test';
      })->middleware(['auth', 'password.confirm']);*/





Route:: get('/',Index::class);
//Route::get('/', 'App/Http/Controllers/HomeController@index')->name('home');
Route:: get ('/Annonces',Annonces::class);
Route::get('/annonce-preview',AnnoncesPreview::class);
Route:: get('/categourie' ,CategourieAjout::class  );
Route:: get('/profil' ,Profil::class  );


Route::post('/add', [HomeController::class, 'add']);

//afficher annonces
Route::get('/AfficherAnnonce','App\Http\Controllers\PostController@afficherAnnonce')->name('afficher');



//Recherche
//Route::get('/search','App\Http\Controllers\SearchController@search');
Route::post('/search', [App\Http\Controllers\SearchController::class, 'search'])->name('searchAnnonce');



//Route::get('/mailTest', "MailController@index");










