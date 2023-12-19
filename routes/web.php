<?php

use App\Http\Controllers\Coach\ChatConroller;
use App\Http\Controllers\Coach\OrderController;
use App\Http\Controllers\Coach\ProgramController;
use App\Http\Controllers\SessionController;
use App\Models\Chat;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\CoachController as AdminCoachController;

use App\Http\Controllers\Coach\UserController as CoachUserController;


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


Route::get('/test-chat' , function () {
  return Chat::create([
      'sender_id' => 1,
      'message' => 'من خیلی خوبم',
      'receiver_id' => 2
  ]);
});

Route::get('/test-create-user' , function () {
    return User::create([
        'type' => 'admin',
        'password', '123',
        'name' => 'سهیل عباسی',
        'phone' => '0937746025',
        'sex' => 'مرد',
    ]);
});

Route::get('/test-login' , function () {
  return auth()->loginUsingId(2);
});


Route::get('/logout' , function () {
     auth()->logout();
});

Route::get('/test-subscription', function () {
    return \App\Models\Subscription::create([
        'coach_id' => 2,
        'user_id' => 3
    ]);
});

Route::get('/test-order', function () {
  return Order::create([
      'user_id' => 3,
      'program_id' => 1
  ]);
});

Route::get('/test-order-rel' , function () {

    return $order;
});


Route::get('/', function () {
    return view('welcome');
});


// login and logout
Route::get('/'  , [SessionController::class , 'showLoginPage']);
Route::get('/login'  , [SessionController::class , 'showLoginPage']);
Route::post('/login' , [SessionController::class , 'login']);

// admin routes
Route::prefix('admin')->group(function () {

    Route::get('/', function () {
        return view('admin-panel.dashboard');
    })->middleware('isAdmin');

    Route::resource('/users', AdminUserController::class);
    Route::resource('/coaches', AdminCoachController::class);
});


// coach routes

Route::prefix('coach')->group(function () {
    Route::resource('programs', ProgramController::class)->middleware('isCoach');

    Route::get('/', function () {
        return view('coach-panel.dashboard');
    })->middleware('isCoach');

    Route::prefix('athletes')->group(function () {
        Route::get('/', [CoachUserController::class, 'index'])->middleware('isCoach');
    });

    Route::prefix('chat')->group(function () {
        Route::get('/', [ChatConroller::class, 'index'])->middleware('isCoach');
        Route::get('/{user}', [ChatConroller::class, 'create'])->middleware('isCoach');
        Route::post('/', [ChatConroller::class, 'store'])->middleware('isCoach');
    });

//    Route::resource('orders' , OrderController::class);
    Route::prefix('orders')->group(function () {
        Route::get('/' , [OrderController::class , 'index']);
        Route::get('/create/{order}' , [OrderController::class , 'create']);
        Route::post('/{order}' , [OrderController::class , 'store']);
    });

})->middleware(['auth' , 'isCoach']);


// user login and subscription
Route::get('/{user:username}' , function (User $user) {
    return view("register" , compact('user'));
});

Route::post('/{user:username}' , [CoachUserController::class , 'store']);

