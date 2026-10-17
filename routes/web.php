<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// đăng nhập
Route::get('/', function (Request $request) {
  $name = $request->input('name');

  return view('home');
});
