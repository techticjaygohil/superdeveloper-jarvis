<?php

use Jarwis\Http\Controllers\JarwisController;

$namespace = 'Jarwis\Http\Controllers';

Route::group([
    'namespace' => $namespace,
    'prefix' => 'jarwis',
], function () {
 Route::get('/', 'JarwisController@index');
 Route::get('/weather', 'JarwisController@weather');
});