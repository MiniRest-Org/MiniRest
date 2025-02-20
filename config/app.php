<?php

use MiniRest\Providers\AppServiceProvider;
use MiniRestFramework\Support\ServiceProvider;

return [
    'name' => 'My Application',
    'env' => 'production',
    'debug' => false,
    'root_path' => dirname(__DIR__, 1),
    'views_path' => dirname(__DIR__, 1) . '/resources/views/',

    'providers' => ServiceProvider::defaultProvides()->merge([
        AppServiceProvider::class,
    ]),


    'aliases' => \MiniRestFramework\Support\Facades\Facade::defaultAliases()->merge([

    ])
];