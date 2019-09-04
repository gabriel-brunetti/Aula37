<?php

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

// requisição para o endereço raiz ele vai redirecionar para o metodo getIndex do controller
//  PAGE CONTROLLER (classe PAGE CONTROLLER)
Route::get('/', 'PagesController@getIndex');
// endereço /cart utiliza o metodo getCart
Route::get('/cart', 'PagesController@getCart');
Route::get('/checkout', 'PagesController@getCheckout');
Route::get('/product-details', 'PagesController@getProductDetails');
Route::get('/shop', 'PagesController@getShop');

// criando rota para a pagina Admin
Route::get('/admin/produtos', 'ProdutosController@index');