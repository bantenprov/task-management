```php
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::get('/',function(){
    return view('index');
})->name('index');

Route::get('/admin-login', function () {
    return redirect()->route('login');
});


Route::group(['prefix' => 'task-management','middleware' => ['auth']],function(){
    
    Route::get('/',function(){
        $countProject = TaskManagement::project('countProject',NULL,NULL);
        $countComment = TaskManagement::comment('countComment',NULL,NULL);
        $countStaf = TaskManagement::staf('countStaf',NULL,NULL);
        $countMember = TaskManagement::member('countMember',NULL,NULL);
        $countTask = TaskManagement::task('countTask',NULL,NULL);
        $countUser = App\User::all()->count();
        
        return view('task-management::index',compact(
            'countProject',
            'countComment',
            'countStaf',
            'countMember',
            'countTask',
            'countUser'
        ));
    })->name('taskManagementIndex');


    // User =========================================


    Route::get('/user','UserController@index')->name('userManagementIndex');
    Route::get('/user/create','UserController@create')->name('userManagementCreate');
    Route::post('/user/store','UserController@store')->name('userManagementStore');
    Route::get('/user/{id}/view','UserController@show')->name('userManagementShow');
    Route::get('/user/{id}/edit','UserController@edit')->name('userManagementEdit');
    Route::post('/user/{id}/update','UserController@update')->name('userManagementUpdate');

    // User profile ==================================

    Route::get('/user-profile','UserProfileController@index')->name('userProfileIndex');
    Route::get('/user-profile/edit','UserProfileController@edit')->name('userProfileEdit');
    Route::post('/user-profile/update','UserProfileController@update')->name('userProfileUpdate');

    // Task ==========================================
    Route::get('/task',function(){
        
        $title = "Task";

        $tasks = TaskManagement::task('index',NULL,NULL);
        
        return view('task::index',compact('tasks','title'));
    })->name('taskManagementTaskIndex');
    
    
    
    Route::get('/task/create',function(){
        $title = "Task";
        $tasks = TaskManagement::task('create',NULL,NULL);
        $projects = $tasks;
        
        return view('task::create',compact('projects','title'));
    })->name('taskManagementTaskCreate');
    
    
    Route::post('/task/store','TaskManagementController@taskManagementTaskStore')->name('taskManagementTaskStore');
 
    Route::get('/task/{task_id}/comment',function($task_id){
        $title = "Comment";
        $task = TaskManagement::comment('create',$task_id,NULL);        
        
        return view('comment::create',compact('task','title'));
    })->name('taskManagementTaskCommentCreate');
  
    Route::get('/comment/',function(){
        
        $title = "Comments";
        $comments = TaskManagement::comment('index',NULL,NULL);        
        
        return view('comment::index',compact('comments','title'));
    
    })->name('taskManagementCommentIndex');
    
    Route::post('/task/{task_id}/comment/store','TaskManagementController@taskManagementTaskCommentStore')->name('taskManagementTaskCommentStore');
    
    Route::get('/comment/{id}/view',function($id){
        
        $title = "Comment";
        $comment = TaskManagement::comment('show',$id,NULL);        
            
        return view('comment::show',compact('comment','title'));
    
    })->name('taskManagementCommentShow');

    Route::get('/comment/{id}/delete',function($id){

        return TaskManagement::comment('destroy',$id,NULL);

    })->name('taskManagementCommentDestroy');
    
    Route::get('/task/{id}/view',function($id){
        
        $title = "Task";
        $tasks = TaskManagement::task('show',$id,NULL);
        
        $task = $tasks->task;
        $members = $tasks->members;

        $project = TaskManagement::project('show',$id,NULL);
        
        $start = new DateTime($task->start_date);
        $end = new DateTime($task->end_date);

        $duration = $start->diff($end); 
        $countComment = $task->getComment->count(); 
        //dd($countComment);

        
        //dd($task->getComment[0]->comment_rating);
        
        
        return view('task::show',compact('task','members','title','duration','countComment'));
    
    })->name('taskManagementTaskShow');
    
    Route::get('/task/{id}/add-member',function($id){
        
        $title = "Add new member";
        $tasks = TaskManagement::task('addMember',$id,NULL);
        
        $task = $tasks->task;
        $members = $tasks->members;
        
        return view('task::add_member',compact('task','members','title'));
    
    })->name('taskManagementTaskAddMember');
    
    Route::post('/task/{task_id}/add-member/store','TaskManagementController@taskManagementTaskAddMemberStore')->name('taskManagementTaskAddMemberStore');
    
    Route::get('/task/{task_id}/{member_id}/remove-member',function($task_id,$member_id){
        
        
        TaskManagement::task('removeMember',$task_id,$member_id,NULL);
    
        return redirect()->back()->with('message','Success remove member');
    
    
    })->name('taskManagementTaskRemoveMember');
    
    Route::get('/task/{id}/delete',function($id){
    
        TaskManagement::task('destroy',$id,NULL,NULL);
        return redirect()->back()->with('message','Success delete data'); 
    
    })->name('taskManagementTaskDestroy');
    
    //stafs ==========================================
    
    Route::get('/staf',function(){
        
        $title = "Staf";

        $stafs = TaskManagement::staf('index',NULL,NULL);
    
        return view('staf::index',compact('stafs','title'));
    
    })->name('taskManagementStafIndex');
    
    Route::get('/staf/create',function(){

            $title = "Staf";
            $stafs = TaskManagement::staf('create',NULL,NULL);
    
            $opds = $stafs->opds;
            $users = $stafs->users;
        
            return view('staf::create',compact('opds','users','title'));
        
    })->name('taskManagementStafCreate');

    Route::get('staf/{id}/view',function($id){
        $title = "Staf";
        $staf = TaskManagement::staf('show',$id,NULL);
        return view('staf::show',compact('staf','title'));
    })->name('taskManagementStafShow');
    
    Route::post('/staf/store','TaskManagementController@taskManagementStafStore')->name('taskManagementStafStore');

    Route::get('/staf/{id}/edit',function($id){
        
        $title = "Staf edit";

        $staf = TaskManagement::staf('edit',$id,NULL);

        $stafs = TaskManagement::staf('create',NULL,NULL);

        $opds = $stafs->opds;
        $users = $stafs->users;

        return view('staf::edit',compact('staf','title','opds','users'));        

    })->name('taskManagementStafEdit');

    Route::post('/staf/{id}/update','TaskManagementController@taskManagementStafUpdate')->name('taskManagementStafUpdate');
    
    Route::get('/staf/{id}/delete',function($id){
    
        return TaskManagement::staf('destroy',$id,NULL);
    
    })->name('taskManagementStafDestroy');
    
    // Project ==========================================
    
    Route::get('/project',function(){
            
            $title = "Project list";

            $projects = TaskManagement::project('index',NULL,NULL);
        
            return view('project::index',compact('projects','title'));
        
    })->name('taskManagementProjectIndex');
    
    Route::get('/project/create',function(){

            $title = "Add new project";

            $project = TaskManagement::project('create',NULL,NULL);
    
            $stafs = $project;
        
            return view('project::create',compact('stafs','title'));
        
    })->name('taskManagementProjectCreate');
    
    Route::post('/project/store','TaskManagementController@taskManagementProjectStore')->name('taskManagementProjectStore');
    
    Route::get('/project/{id}/delete',function($id){
                
            return TaskManagement::project('destroy',$id,NULL);
        
    })->name('taskManagementProjectDestroy');

    Route::get('/project/{id}/edit',function($id){
        
        $title = "Edit project";
        
        $projects = TaskManagement::project('edit',$id,NULL);

        $project = $projects->project;
        $stafs = $projects->stafs;
        return view('project::edit',compact('title','project','stafs'));

    })->name('taskManagementProjectEdit');

    Route::post('/project/{id}/update','TaskManagementController@taskManagementProjectUpdate')->name('taskManagementProjectUpdate');

    Route::get('/project/{id}/view',function($id){

        $title ="Project";

        $project = TaskManagement::project('show',$id,NULL);
        
        $start = new DateTime($project->start_date);
        $now = new DateTime(date("Y-m-d H:m:s"));
        $end = new DateTime($project->end_date);
        
        $duration = $start->diff($end); 
        //$sisa = $end->diff($now);       
        //dd($sisa);
        return view('project::show',compact('title','project','duration'));

    })->name('taskManagementProjectShow');
    
    // Member ==========================================
    
    Route::get('/member',function(){
            $title = "Member list";
            $members = TaskManagement::member('index',NULL,NULL);
        
            return view('member::index',compact('members','title'));
        
    })->name('taskManagementMemberIndex');
    
    Route::get('/member/create',function(){
        
            $title = "Add new member";

            $members = TaskManagement::member('create',NULL,NULL);
    
            $users =  $members;
    
            return view('member::create',compact('users','title'));
        
    })->name('taskManagementMemberCreate');
    
    Route::post('/member/store','TaskManagementController@taskManagementMemberStore')->name('taskManagementMemberStore');

    Route::get('/member/{id}/edit',function($id){

        $title = "Member";
        $member = TaskManagement::member('edit',$id,NULL);

        $users = $member->users;
        $member = $member->member;

        return view('member::edit',compact('title','users','member'));

    })->name('taskManagementMemberEdit');

    Route::post('/member/{id}/update','TaskManagementController@taskManagementMemberUpdate')->name('taskManagementMemberUpdate');

    Route::get('/member/{id}/show',function($id){
        $title = "Member";
        $member = TaskManagement::member('show',$id,NULL);

        return view('member::show',compact('title','member'));

    })->name('taskManagementMemberShow');

    Route::get('/member/{id}/delete',function($id){

        return TaskManagement::member('destroy',$id,NULL);

    })->name('taskManagementMemberDestroy');

    
});
```
