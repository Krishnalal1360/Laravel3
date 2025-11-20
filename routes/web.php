<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Jobs\SendWelcomeEmail;
use App\Http\Controllers\PostController;
use App\Events\MyEvent;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/send-email', function(){
    $user = User::find(1);
    dispatch(new SendWelcomeEmail($user));
});

Route::get('/message', function(){
    return view('broadcast.message');
});

Route::get('/send-message', function(){
    //
    event(new MyEvent("Or Else Learn Java!"));
    //dd("Message Sent!");
});

Route::resource('post', PostController::class);

require __DIR__.'/auth.php';
