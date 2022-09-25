<?php

use App\Http\Controllers\ServiceContainerController;
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

class SampleClass{
    public function index()
    {
        echo 'sanpleClass-index';
    }
    public function show($data)
    {
        echo 'sanpleClass-show'.$data;
    }
}

class FacadesClass{

   public static function __callStatic($name , $arguments)
   {
       (new SampleClass)->{$name}(...$arguments);
   }
}

FacadesClass::show('Imtiaz');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/service-container', [ServiceContainerController::class ,'index']);
