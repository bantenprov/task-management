# task-management
Task management

## Install Laravel version 5.4.*

```bash
$ composer create-project --prefer-dist laravel/laravel project_name "5.4.*"
```


## Install package

```bash
$ composer require bantenprov/task-management:dev-master
```

## Edit Composer.json

Tambahkan `"snowfire/beautymail": "dev-master",` pada composer.json
```json
"require": {
        "snowfire/beautymail": "dev-master"
    },
```

## Edit config/app.php

```php
'providers' => [
        App\Providers\RouteServiceProvider::class,
        
        //...
        Collective\Html\HtmlServiceProvider::class,
        'That0n3guy\Transliteration\TransliterationServiceProvider',
        Bantenprov\Project\ProjectServiceProvider::class,
        Bantenprov\Task\TaskServiceProvider::class,
        Bantenprov\Staf\StafServiceProvider::class,
        Bantenprov\Comment\CommentServiceProvider::class,
        Bantenprov\Member\MemberServiceProvider::class,
        Bantenprov\TaskManagement\TaskManagementServiceProvider::class,
        Snowfire\Beautymail\BeautymailServiceProvider::class,
        willvincent\Rateable\RateableServiceProvider::class,
```

```php
'aliases' => [
        'View' => Illuminate\Support\Facades\View::class,
        //...
        'Form' => Collective\Html\FormFacade::class,
        'Html' => Collective\Html\HtmlFacade::class,        
        'TaskManagement' => Bantenprov\TaskManagement\Facades\TaskManagement::class,
```

## Install task management

```bash
$ php artisan bantenprov:task-management-install
$ php artisan vendor:publish --tag=tm-views
$ php artisan vendor:publish --tag=tm-public
$ php artisan vendor:publish --tag=tm-migrations
```

### untuk example route, bisa lihat [disini](https://github.com/bantenprov/task-management/blob/master/exmple-route.md)
