<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/mail-config', function () {
    return config('mail.mailers.smtp');
});



Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::get('/', function () {
    return view('pages.home');
})->name('home');
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/team', function () {
    return view('pages.team');
})->name('team');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
Route::get('/services', function () {
    return view('pages.services');
})->name('services');
Route::get('/case-studies', function () {
    return view('pages.case-studies');
})->name('case-studies');

Route::get('/insights', function () {
    return view('pages.insights');
})->name('insights');


Route::prefix('/services')->group(function () {
    Route::get('/labour-law', function () { return view('pages.services.labour'); })->name('services.labour');
    Route::get('/property-law', function () { return view('pages.services.property'); })->name('services.property');
    Route::get('/commercial-law', function () { return view('pages.services.commercial'); })->name('services.commercial');
    Route::get('/criminal-law', function () { return view('pages.services.criminal'); })->name('services.criminal');
    Route::get('/litigation', function () { return view('pages.services.litigation'); })->name('services.litigation');
    Route::get('/third-party-claims', function () { return view('pages.services.third-party'); })->name('services.third-party');
    Route::get('/Constitutional-litigation', function () { return view('pages.services.Constitutional'); })->name('services.constitutional');
});

    