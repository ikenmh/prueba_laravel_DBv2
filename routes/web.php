<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Models\Rol;

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
    $rol = new Rol;
    echo json_encode(Rol::find(2)->getEndpoints);
});

