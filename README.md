<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Default users

- Administrator:


    email: administrator@gmail.com
    password: Administrator

- User:


    email: user@gmail.com
    password: User  

## Refresh database

    composer dump-autoload
    
    php artisan migrate:refresh
    php artisan db:seed

## Include modules

- Permissions and Roles: https://github.com/spatie/laravel-permission.git
- Admin template (AdminLTE): https://adminlte.io/themes/v3/index3.html
