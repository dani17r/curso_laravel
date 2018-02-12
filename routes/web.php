<?php

Route::get('/', function () {
    return 'home';
});

Route::get('/usuarios', function(){
    return 'usuarios';
});

/* Route::get('/usuarios/detalles', function(){
  return 'mostrando detalles del usuario: '.$_GET['id'];
}); */

//cambiar el orden de las rutas.
Route::get('usuarios/nuevo', function(){
    return 'crear nuevo usuario:';
});

//usuarios/nuevo != usuarios/'[0-9]+'
Route::get('/usuarios/{id}', function($id){
  return "mostrando detalles del usuario: {$id}";
}); /*->where('id','[0-9]+');('id','\d+') para letras y numeros se pone ('id','\w+')*/

Route::get('/saludos/{name}/{nickname?}', function($name, $nikename = null){ //con el signo ? en el parametro de nikname se indica que es opcional
  if ($nikename) {
    return "Tu nombre es {$name}, y tu apodo es {$nikename}";
  }else {
    return "Tu nombre es {$name}, y no tienes apodo";
  }

});
