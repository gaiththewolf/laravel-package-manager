# laravel-package-manager
laravel-package-manager is a laravel package to manage your project dependencies

[![TESTS](https://github.com/gaiththewolf/laravel-package-manager/actions/workflows/blank.yml/badge.svg?branch=main)](https://github.com/gaiththewolf/laravel-package-manager/actions/workflows/blank.yml)
[![Latest Stable Version](http://poser.pugx.org/gaiththewolf/laravel-package-manager/v)](https://packagist.org/packages/gaiththewolf/laravel-package-manager) 
[![Total Downloads](http://poser.pugx.org/gaiththewolf/laravel-package-manager/downloads)](https://packagist.org/packages/gaiththewolf/laravel-package-manager) 
[![Latest Unstable Version](http://poser.pugx.org/gaiththewolf/laravel-package-manager/v/unstable)](https://packagist.org/packages/gaiththewolf/laravel-package-manager) [![License](http://poser.pugx.org/gaiththewolf/laravel-package-manager/license)](https://packagist.org/packages/gaiththewolf/laravel-package-manager)


## installation 

1.via composer : 
```bash
composer require gaiththewolf/laravel-package-manager
```
2.add the service provider:

```php
// config/app.php 
'providers' => [
    /*
     * Package service providers
     */
    \gaiththewolf\lpmanager\LPManagerServiceProvider::class,
];
```
3.publish the view assets :
```bash 
php artisan vendor:publish --provider="gaiththewolf\lpmanager\LPManagerServiceProvider"
```
4.navigate to ```http://your-project-path/lpmanager``` . and that's it :).

## Config
```php 
//published config file : config/lpmanager.php
return [
    /*
     * Enable it?
     */
    'web_interface_enabled' => env('ENABLE_LPMANAGER', true),
    /*
    * Route used to access
    */
    'route' => 'lpmanager',
    /*
     * Deffer booting for middleware use
     */
    'use_middleware' => false,
    /*
     * If use middelware, provide the name of the middleware used
     */
    'use_middleware_name' => [],
  ];
```
