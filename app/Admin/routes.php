<?php

use Illuminate\Routing\Router;

/* routes.php are registered before bootstrap.php
 * so we need to forward this for admin::login view customization
 */
app('view')->prependNamespace('admin', resource_path('views/vendor/laravel-admin'));

Route::group([
    'prefix'        => config('admin.prefix'),
    'namespace'     => Admin::controllerNamespace(),
    'middleware'    => ['web', 'admin'],
], function (Router $router) {

    $router->get('/', 'HomeController@index');

});
