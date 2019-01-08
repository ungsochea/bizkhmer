<?php

use App\Model\TagPost;
use App\Http\Resources\TagResource;
use App\Http\Resources\TagPostResource;
use App\Http\Resources\CategoryPostResource;
use App\Model\CategoryPost;

Route::view('/','home.home');
Route::view('/{any}','home.home');
Route::view('/{any}/{any1}','home.home');

// Route::get('{path}', function () {
//     return view('home.home');
// })->where('path','([A-z\d\/_.-]+)?');



// Route::get('/dashboard', function () {
//     return view('dashboard.layout.master');
// });

// Route::get('/tag',function(){
//     return TagPostResource::collection(TagPost::limit(50)->get());
//     // dd($tag);
// });
// Route::get('/category',function(){
//     return CategoryPostResource::collection(CategoryPost::limit(50)->get());
//     // dd($tag);
// });