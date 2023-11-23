<?php

use Illuminate\Support\Facades\Route;
use App\Models\Lead;
use App\Mail\NewLeadEmail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mailable', function () {
    $lead = Lead::find(1);
    return new NewLeadEmail($lead);
});
