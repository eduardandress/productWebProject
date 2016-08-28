<?php

namespace Installer\Controllers;

use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Installer\Helpers\CompanySetupManager;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Response;
use Image;
class CompanySetupController extends Controller
{


    private $companySetupManager;

    public function __construct(CompanySetupManager $companySetupManager)
    {
        $this->companySetupManager = $companySetupManager;
    }

    public function company()
    {
        return view('installer::company');
    }

    public function save()
    {
      $input = Input::all();

      if (Input::hasFile('logo')) {
            $logo = Input::file('logo');
            $shortURL ='CompanyLogo/';
            $destinationPath = public_path().'/'.$shortURL ;
            $filename ='companyLogo.'.$logo->getClientOriginalExtension();
            $logo->move($destinationPath, $filename);
            $input['logoURL'] = $shortURL.$filename;
      }

      if (Schema::hasTable('company')) {
        $this->companySetupManager->createCompany($input);
      } else {
        return redirect()->route('EJCInstaller::welcome');
      }

      return redirect()->route('EJCInstaller::final');
    }
}
