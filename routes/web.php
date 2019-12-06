<?php
// products
Route::get('/','HomeController@index')->name('home');

Route::get('/administrarProducto','ProductsController@index');

Route::get('/products/agregrarProducto','ProductsController@create');

Route::post('/products/guardarProducto','ProductsController@save');

Route::get('/products/detalleProducto/{id}','ProductsController@show');

Route::get('/products/editarProducto/{id}','ProductsController@edit');

Route::post('/products/guardarProductoEditado/{id}', 'ProductsController@update');

Route::get('/products/buscarProducto','ProductsController@search');

Route::get('/products/eliminarProducto/{id}','ProductsController@destroy');


// Perfil
Route::get('/partials/perfil/{id}', 'UsersController@show');

Route::get('/partials/perfilEditar/{id}','UsersController@edit');

Route::post('/partials/guardarUsuarioEditado/{id}', 'UsersController@update');

Auth::routes();


// Categoria

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products/listadoXcategoria/{id}','CategoryController@show');

// Carrito
Route::get('/carrito/index','CarritosController@show');

Route::get('/carrito/agregar/{id}/{userId}','CarritosController@add');

Route::get('/s6VDIRI7DRiqvw7d6riq7w6dRQs', function () {
	Artisan::call('storage:link');
});

// Route::get('/administrarProducto','HomeController@index')->name('home');
// Route::get('/products/listadoDeProductos/','HomeController@index');
//Route::patch('/products/{id}',);
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Crear una ruta a /miPrimeraRuta, y que al ingresar, devuelva “Creé mi primer ruta en Laravel”.

// Route::get('/miPrimeraRuta', function () {
//     return 'Creé mi primer ruta en Laravel';
// });

// Crear una ruta /esPar/{numero}, y que al ingresar, devuelva un string indicando si el número es par o impar.

// Route::get('/esPar/{numero}', function ($numero) {
//   if($numero%2){
//     return 'Es impar';
//   }else{
//     return 'Es par';
//   }
// });

// Crear una ruta llamada sumar que reciba dos números como parámetros. La ruta debe retornar la suma de ambos números.

// Route::get('/sumar/{numeroA}/{numeroB}', function ($numeroA,$numeroB) {
//     return $numeroA+$numeroB;
// });

// Modificar la ruta anterior para que pueda recibir un nuevo parámetro opcional. Es decir, si la ruta anterior recibe el nuevo parámetro, debe sumar los tres números, en caso contrario, debe realizar la suma original

// Route::get('/sumar/{numeroA}/{numeroB}/{numeroC?}', function ($numeroA,$numeroB,$numeroC=0) {
//     return $numeroA+$numeroB+$numeroC;
// });

// Crear una ruta /peliculas. Esta ruta debe definir un array que contenga los títulos de 5 películas.
// Crear la vista peliculas.blade.php, y asociarla a la ruta /peliculas, enviando el array de películas ya definido. Mostrar en la vista, el listado de películas utilizando la sintaxis de PHP clásica.

// Route::get('/peliculas', function () {
//   $pelis=[
//     0=>['Avatar',6],
//     1=>['star wars',8],
//     2=>['El padrino',9]
//   ];
//   return view('peliculas', ['peliculas' => $pelis]);
// });
//
//
//
// Route::get('/peliculas/{id}', function ($id) {
//   $pelis=[
//     0=>['Avatar',6],
//     1=>['star wars',8],
//     2=>['El padrino',9]
//   ];
//   return view('peliculas', ['peliculas' => $pelis[$id]]);
//   });
// Route::get('/', 'CategoryController@index');
