<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Usuarios
    Route::apiResource('usuarios', 'UsuariosApiController');

    // Durnin Womersley
    Route::apiResource('durnin-womersleys', 'DurninWomersleyApiController');
});
