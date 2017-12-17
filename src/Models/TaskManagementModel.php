<?php namespace Bantenprov\TaskManagement\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The TaskManagementModel class.
 *
 * @package Bantenprov\TaskManagement
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class TaskManagementModel extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'task_management';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
