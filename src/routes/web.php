<?php
use Illuminate\Support\Facades\Route;
use NerdPanda\App\Http\Controllers\NerdPanda;
Route::middleware('web')->group(function (){
    Route::get('nerd-panda',NerdPanda::class)->name('nerd-panda');
});

