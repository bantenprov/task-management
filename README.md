# task-management
Task management

## Install Laravel version 5.4.*

```bash
$ composer create-project --prefer-dist laravel/laravel project_name "5.4.*"
```

## Install package

```bash
$ composer require bantenprov/task-management
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

## Install task management

```bash
$ php artisan bantenprov:task-management-install
```
