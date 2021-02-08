<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'TestController@welcome'); //aquí se llama al controlador TestController utilizando
                                                                // uilizando el metodo welcome

/*Route::get('/prueba', function(){           // aquí solo devuelve el texto en mode de una vista
    return 'Hola Soy una ruta de prueba'; 
});*/

/*Route::get('/', function(){           
    return view ('welcome'); //Aqui devuelve la misma vista pero estamos programando los metodos dentro de la ruta 
});*/                        //por lo cual se pierde el sentido de la vista controlador



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
