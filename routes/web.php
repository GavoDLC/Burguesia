<?php
use App\Models\Burguesia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestauranteController;


Route::resource("/",RestauranteController::class);

Route::get('/menu',function(){
    return view("burguesia.menu");
});
Route::get('/misionvision',function(){
    return view("burguesia.misionvision");
});
Route::get('/misionvision',function(){
    return view("burguesia.misionvision");
});
Route::get('/horarios', function(){
    return view('burguesia.horarios');
});