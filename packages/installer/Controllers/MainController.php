<?php

namespace Installer\Controllers;

use App\Http\Controllers\Controller;
use Installer\Helpers\EnvironmentManager;
use Installer\Helpers\RequirementsChecker;
use Installer\Helpers\PermissionsChecker;
use Installer\Helpers\CompanySetupManager;
use Installer\Helpers\InstalledFileManager;
use Installer\Helpers\DatabaseManager;
use File;

class MainController extends Controller
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

    public function uninstallView(){
        return view('installer::uninstall');
    }

    public function uninstall(){

        $dataBaseManager = new DatabaseManager();
        $installedFileManager = new InstalledFileManager();


        try {

            // Cleaning the images folders
            $clientImgPath = public_path().'/'."assets/images/clients/";
            $productImgPath = public_path().'/'."assets/images/products/";
            $companyLogoPath = public_path().'/'."assets/images/CompanyLogo/";
            File::cleanDirectory($companyLogoPath);
            File::cleanDirectory($productImgPath);
            File::cleanDirectory($clientImgPath);

            $dataBaseManager->truncateAllTables();

            $installedFileManager->delete();
        } catch(\Exception $e){
            return view('installer.error');
        }

        return redirect()->route('CoreRoutes::landing_page');
    }
}
