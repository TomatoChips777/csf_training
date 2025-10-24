<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Route;

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

    Route::resource('students',StudentController::class); 
    Route::resource('courses',CourseController::class); 
    


});
Route::get('/test-email', function(){
    Mail::to('gelocabase1324@gmail.com')->send(new TestMail(
        'Hello Gelo! This is a dynamic test message from Laravel.',
        'https://example.com',
        'Visit Example'
    ));
    return '✅ Test email sent successfully!';
});

// Route::get('/test-email', function(){
//     Mail::to('gelocabase1324@gmail.com')->send(new TestMail());
//     return 'Test mail dispatched';
// });
require __DIR__.'/auth.php';
