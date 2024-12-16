<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [TaskController::class, 'index']); // Trỏ đến view tasks/index.blade.php

Route::resource('tasks', TaskController::class);
