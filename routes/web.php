<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/user/{name}', function ($name=null) {
    return ('Rahmat Hidayat');
});

Route::get('/user/{name?}', function ($name='John') {
    return ('Rahmat Hidayat').$name;
});

Route::get('/mahasiswa', function () {
    $arrMahasiswa = ["Rahmat Hidayat", "bangkit", "perly"];

    return view('POLITEKNIK NEGERI MALANG',['mahasiswa'=> $arrMahasiswa]);
});