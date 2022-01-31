<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logreg;

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
/*Route::get('users',function () {
    return view('users')});*/
//syntax for controller Route::httpmethod('routename',[controllername::class,'functionname']);
//Views
Route::get('/', function () {
    return view('index');
});
Route::view('login','welcome');
Route::view('usrformlog','userlog');
Route::view('admformlog','adminlog');
Route::view('agtformlog','agentlog');
Route::view('usrformreg','userreg');
Route::view('agtformreg','agentreg');
//Controllers
Route::post('usrlog',[logreg::class,'userlog']);
Route::post('admlog',[logreg::class,'adminlog']);
Route::post('agtlog',[logreg::class,'agentlog']);
Route::post('usrreg',[logreg::class,'userreg']);
Route::post('agtreg',[logreg::class,'agentreg']);
?>