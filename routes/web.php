<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () { return view('home.home'); });

// routing
Route::get('/about', function () { return view('about.about'); })->name('about');
Route::get('/product', function () { return view('product.product'); })->name('product');
Route::get('/contact', function () { return view('contact.contact'); })->name('contact');
Route::get('/business-oportunity', function () { return view('business_oportunity.business'); })->name('business');
Route::get('/gallery', function () { return view('activity.activity'); })->name('activity');
Route::get('/promo', function () { return view('promo.promo'); })->name('promo');
Route::get('/testimoni', function () { return view('testimoni.testimoni'); })->name('testimoni');
Route::get('/health-article', function () { return view('article.article'); })->name('health-article');
// Route::get('/{username}', [ProfileController::class, 'profile']);
Route::post('/contact-form', [ContactController::class, 'submit'])->name('form-submit');
Route::get('/pdf/business-plan', function () { return view('pdf-viewer.business_plan'); })->name('pdf-business');
Route::get('/pdf/solafibe', function () { return view('pdf-viewer.solafibe'); })->name('pdf-solafibe');

// article
Route::get('/pentingnya-kesehatan-usus', function () { return view('article.article-usus'); })->name('usus');
Route::get('/diet-dengan-solafibe', function () { return view('article.article-solafibe'); })->name('solafibe');
Route::get('/manfaat-spirulina-pada-tubuh', function () { return view('article.article-spiriluna'); })->name('spirulina');
Route::get('/manfaat-klorofil-bagi-kesehatan', function () { return view('article.article-klorofil'); })->name('klorofil');
Route::get('/manfaat-psyllium-husk-yang-kaya-serat', function () { return view('article.article-psyllium'); })->name('psyllium');
Route::get('/video-usus-bersih-vs-usus-kotor', function () { return view('article.article-video-usus'); })->name('video-usus');
Route::get('/kenalan-dengan-asam-askorbat', function () { return view('article.article-vitamin'); })->name('asam-askorbat');
Route::get('/mengapa-kesehatan-usus-penting', function () { return view('article.article-kesehatan-usus'); })->name('kesehatan-usus');