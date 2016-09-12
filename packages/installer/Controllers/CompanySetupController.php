<?php

namespace Installer\Controllers;

use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Response;
use Image;
use Core\Repositories\CompanyRepository;
use App\Helpers;

class CompanySetupController extends Controller
{


    private $companyRepo;

    public function __construct(CompanyRepository $companyRepo){
       $this->companyRepo = $companyRepo;
    }

    public function save(){

      $input = Input::all();
      if (Input::hasFile('logo')) {
            $logo = Input::file('logo');
            $shortURL ='assets/images/CompanyLogo/';
            $destinationPath = public_path().'/'.$shortURL ;
            $filename ='companyLogo.'.$logo->getClientOriginalExtension();
            $logo->move($destinationPath, $filename);
            $input['logoURL'] = $shortURL.$filename;
      }
      //Saving the company
      $replaceTable =  true;
      $response = '';
      try {

          if($replaceTable) {
              \DB::table('company')->truncate();
          }

          $this->companyRepo->create($input);
          $response =  \AppHelper::response('Company created!', 'success');

      } catch(Exception $e){
           $response =  \AppHelper::response($e->getMessage());
      }

      return response()->json($response);

    }
}
