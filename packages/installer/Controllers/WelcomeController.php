<?php

namespace Installer\Controllers;

use App\Http\Controllers\Controller;
use Installer\Helpers\EnvironmentManager;
use Installer\Helpers\RequirementsChecker;
use Installer\Helpers\PermissionsChecker;
use Installer\Helpers\CompanySetupManager;
use Installer\Helpers\InstalledFileManager;

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

    	$envConfig = $environmentManager->getEnvContent();
    	
        $requirements = $requirementsChecker->check(
            config('installer.requirements')
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
