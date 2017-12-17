<?php

Route::group(['prefix' => 'task-management'], function() {
    Route::get('demo', 'Bantenprov\TaskManagement\Http\Controllers\TaskManagementController@demo');
});
