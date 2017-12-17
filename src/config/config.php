<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Demo Config
    |--------------------------------------------------------------------------
    |
    | The following config lines are used for development of package
    | Bantenprov/TaskManagement
    |
    */

    'key' => 'value',
    'controller' => [
        'comment' => \Bantenprov\Comment\Http\Controllers\CommentController::class,
        'member' => \Bantenprov\Member\Http\Controllers\MemberController::class,
        'project' => \Bantenprov\Project\Http\Controllers\ProjectController::class,
        'staf' => \Bantenprov\Staf\Http\Controllers\StafController::class,
        'task' => \Bantenprov\Task\Http\Controllers\TaskController::class
    ]

];
