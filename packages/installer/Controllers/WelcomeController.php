<?php

namespace Installer\Controllers;

use App\Http\Controllers\Controller;
use Installer\Helpers\EnvironmentManager;
use Installer\Helpers\RequirementsChecker;
use Installer\Helpers\PermissionsChecker;
use Installer\Helpers\CompanySetupManager;
use Installer\Helpers\InstalledFileManager;
use Installer\Helpers\DatabaseManager;

class WelcomeController extends Controller
{
    /**
     * Display the installer welcome page.
     *
     * @return \Illuminate\View\View
     */
    public function welcome()
    {
    	$environmentManager = new EnvironmentManager(); 
        $requirementsChecker =  new RequirementsChecker();
        $permissionsChecker = new PermissionsChecker();
      //  $companySetupManager = new CompanySetupManager();
        $InstalledFileManager = new InstalledFileManager();
        $dataBaseManager = new DatabaseManager();

    	$envConfig = $environmentManager->getEnvContent();
    	
        $requirements = $requirementsChecker->check(
            config('installer.requirements'), $dataBaseManager
        );

        $permissions = $permissionsChecker->check(
            config('installer.permissions')
        );
        return view('installer::welcome',  array(
        	 'envConfig' =>  $envConfig,
             'requirements' => $requirements,
             'permissions' => $permissions
        ));
    }
}
