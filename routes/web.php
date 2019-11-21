<?php

Route::get('/', function () {
    $log=false;
    return view('login',compact('log'));
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/album', function () {
    return view('album');
});

Route::get('/quiz', function () {
    return view('quiz');
});

Route::get('/sobre', function () {
    return view('sobre');
});
Route::get('/nova_pasta', function () {
    return view('nova_pasta');
});

Route::get('/login', function () {
    $log=false;
    return view('login',compact('log'));
    
});

Route::post("/logar","UsuariosController@logar");

Route::post("/criar_pasta","PastasController@criar");

Route::get('/editar_pasta/{id}',"PastasController@telaEditar");

Route::post("/editar_pasta/{id}","PastasController@editar");

Route::get('/deletar_pasta/{id}',"PastasController@excluir");

Route::get("/fotos","AlbunsController@listar");

Route::get("/fotos/{id}/{nome}","AlbunsController@listarFotos");

Route::get('/add_foto/{id}/{nome}',"AlbunsController@telaAddFoto" , ['only' => ['store', 'destroy']]);

Route::post("/add/{id}/{nome}","AlbunsController@addFotos");

Route::get('/deletar_foto/{id}/{nome}/{id_pasta}/{nome_pasta}',"AlbunsController@excluirFotos");

Route::get('/exibir/{nome_pasta}/{id_pasta}/{nome}/{id}',"AlbunsController@exibirImagem");






