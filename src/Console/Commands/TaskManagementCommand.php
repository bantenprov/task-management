<?php namespace Bantenprov\TaskManagement\Console\Commands;

use Illuminate\Console\Command;
use File;
/**
 * The TaskManagementCommand class.
 *
 * @package Bantenprov\TaskManagement
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class TaskManagementCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenprov:task-management-install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish file controller, view, route';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->pulishControllerStub();
        $this->pulishRouteStub();
        $this->pulishModelStub();
        $this->pulishAuthStub();
        $this->pulishUserControllerStub();
        $this->pulishUserProfileControllerStub();
        $this->publishKernel();
        $this->info('Success publish install task management');
    }


    public function pulishControllerStub()
    {                     
        
        File::put(base_path('app/Http/Controllers/TaskManagementController.php'),File::get(__DIR__.'/../../stubs/controllers/TaskManagementController.stub'));
        
    }

    public function pulishRouteStub()
    {                     

        File::put(base_path('routes/web.php'),File::get(__DIR__.'/../../stubs/route/web.stub'));       
    }

    public function pulishModelStub()
    {                     

        File::put(base_path('app/User.php'),File::get(__DIR__.'/../../stubs/models/User.stub'));       
    }

    public function pulishAuthStub()
    {                     

        File::put(base_path('app/Http/Controllers/Auth/LoginController.php'),File::get(__DIR__.'/../../stubs/controllers/auth/LoginController.stub'));
        File::put(base_path('app/Http/Controllers/Auth/RegisterController.php'),File::get(__DIR__.'/../../stubs/controllers/auth/RegisterController.stub'));

    }

    public function pulishUserProfileControllerStub()
    {                     

        File::put(base_path('app/Http/Controllers/UserProfileController.php'),File::get(__DIR__.'/../../stubs/controllers/UserProfileController.stub'));

    }

    public function pulishUserControllerStub()
    {                     

        File::put(base_path('app/Http/Controllers/UserController.php'),File::get(__DIR__.'/../../stubs/controllers/UserController.stub'));

    }

    public function publishKernel()
    {
        File::put(base_path('app/Http/Kernel.php'),File::get(__DIR__.'/../../stubs/http/Kernel.stub'));
    }
}
