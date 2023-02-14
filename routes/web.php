<?php

use App\Http\Controllers\ObjectosController;
use App\Http\Controllers\User as ControllersUser;
use App\Models\objectos;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
    $objets=objectos::paginate();
    if(request('search')){
        $objets=objectos::query()
        ->where('title','LIKE','%'. request('search') . '%')->paginate();
    }
    return view('index',[
        'data'=>$objets
    ]);
});

Route::get('/apistore',[ObjectosController::class,'api_store']);

Route::get('/user/{user:id}',function(User $user){
    return view('user',[
        'user'=>$user
    ]);
});

Route::get('/status/{complet}', function ($complet) {
    $data=objectos::where('complet',$complet)->get();
    return view('index',[
        'data'=>$data
    ]);
});

