<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Format;
use Illuminate\Support\Facades\Input;

Route::get('/', function () {
    return view('welcome');
});

Route::auth();
Route::get('/login' , function(){
       return view('auth/login');
   });

Route::group(['middleware' => 'auth'], function () {

   Route::get('/home', 'HomeController@index');

   Route::get('/busquedas','BusquedaController@index');

   Route::get('/ajax-format' , function(){
    $type_id = Input::get('type_id');

    $format = Format::where('type_id','=',$type_id)->get();
    return Response::json($format);
   });

   Route::resource('authors' , 'AuthorController');
   Route::resource('areas' , 'AreaController');
   Route::resource('tags' , 'TagController');
   Route::resource('cataloged', 'CatalogedController');
   Route::resource('uncataloged','UncatalogedController');
   Route::resource('albums' , 'AlbumController');
   Route::resource('album2s', 'Album2Controller');
   Route::resource('album3s', 'Album3Controller');

});


/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function () {
    Route::group(['prefix' => 'v1'], function () {
        require config('infyom.laravel_generator.path.api_routes');
    });
});




