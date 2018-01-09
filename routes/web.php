<?php

//vitrine da loja
  Route::get('/index','IndexController@mostrarIndex')->name('index');
  Auth::routes();
  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/');

//Rotas administrativas
  Route::middleware('auth.admin')->group(function(){
  Route::get('/useradmin','AdminController@CheckarLogin');

  //rotas de produto
  Route::get('/produto/novo','ProdutoController@mostrarFormularioCadastro');
  Route::post('/produto/adiciona','ProdutoController@adicionaProduto');

  //rotas da vitrine
  Route::get('/{id_categoria}/{id}','VitrineController@mostraVitrine');
});
