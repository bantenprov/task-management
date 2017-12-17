<?php namespace Bantenprov\TaskManagement\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\TaskManagement\Facades\TaskManagement;
use Bantenprov\TaskManagement\Models\TaskManagementModel;

/**
 * The TaskManagementController class.
 *
 * @package Bantenprov\TaskManagement
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class TaskManagementController extends Controller
{
    public function demo()
    {
        return TaskManagement::welcome();
    }
}
