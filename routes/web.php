<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', [HomeController::class, 'index']);



// Route::get('about', function () {
//     return view('about');
// });

// Route::get('/hello', function () {
//     return response()->json([
//         'message' => 'Hello, World'
//     ]);
// });

// Route::get('/debug', function () {
//     $dataArray = [
//         'message' => 'Hello, World'
//     ];
//     ddd(request());
// });



Route::get('/task', [TaskController::class, 'index']);



// Route::get('/task/{param}', function ($param) use ($taskList) {
//     return $taskList[$param];
// });

// Route::post('/task', function () use ($taskList) {
//     // return request()->all();
//     $taskList[request()->label] = request()->task;
//     return $taskList;
// });

// Route::patch('/task/{key}', function ($key) use ($taskList) {
//     $taskList[$key] = request()->task;
//     return $taskList;
// });

// Route::delete('/task/{key}', function ($key) use ($taskList) {
//     unset($taskList[$key]);
//     return $taskList;
// });