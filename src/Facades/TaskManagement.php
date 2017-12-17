<?php namespace Bantenprov\TaskManagement\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The TaskManagement facade.
 *
 * @package Bantenprov\TaskManagement
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class TaskManagement extends Facade
{    

    protected static function getFacadeAccessor()
    {
        return 'task-management';
    }

}
