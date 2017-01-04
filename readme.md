# Config

Modificar .env local

# Run app

php artisan serve

# Other stuff 

php artisan --version

# Crear nuevos objectos con laravel generator

1. Definir json en resources/model_schemas

php artisan infyom:scaffold CoffeeOrigins --fieldsFile=origin.json
php artisan infyom:scaffold Farms --fieldsFile=farm.json
php artisan infyom:scaffold Lots --fieldsFile=lot.json
2. php artisan infyom:migration CoffeeOrigins --fieldsFile=origin.json
3. Agregar factory en database/factories/ModelFactory.php
4. Generar Seed: php artisan make:seed CoffeeOrigins
5. Correr factory en Seed
```
$coffeeOrigin = factory(App\CoffeeOrigin::class, 2)->create();
  $user = factory(App\User::class)->create([
  'title' => 'Burundi',
]);
```
6. php artisan migrate
7. php artisan migrate:refresh --seed

# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
