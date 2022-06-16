<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Usuarios
    Route::delete('usuarios/destroy', 'UsuariosController@massDestroy')->name('usuarios.massDestroy');
    Route::resource('usuarios', 'UsuariosController');

    // Nuevo Usuario
    Route::delete('nuevo-usuarios/destroy', 'NuevoUsuarioController@massDestroy')->name('nuevo-usuarios.massDestroy');
    Route::resource('nuevo-usuarios', 'NuevoUsuarioController');

    // Metas
    Route::delete('meta/destroy', 'MetasController@massDestroy')->name('meta.massDestroy');
    Route::resource('meta', 'MetasController');

    // Durnin Womersley
    Route::delete('durnin-womersleys/destroy', 'DurninWomersleyController@massDestroy')->name('durnin-womersleys.massDestroy');
    Route::resource('durnin-womersleys', 'DurninWomersleyController');

    // Calculadora Dieta
    Route::delete('calculadora-dieta/destroy', 'CalculadoraDietaController@massDestroy')->name('calculadora-dieta.massDestroy');
    Route::resource('calculadora-dieta', 'CalculadoraDietaController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
