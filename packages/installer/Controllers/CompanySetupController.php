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

    public function save()
    {
      $input = Input::all();
      if (Input::hasFile('logo')) {
            $logo = Input::file('logo');
            $shortURL ='assets/images/CompanyLogo/';
            $destinationPath = public_path().'/'.$shortURL ;
            $filename ='companyLogo.'.$logo->getClientOriginalExtension();
            $logo->move($destinationPath, $filename);
            $input['logoURL'] = $shortURL.$filename;
      }

      $response = $this->companySetupManager->createCompany($input);
    
      return response()->json($response);
    }
}
