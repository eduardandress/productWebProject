<?php
namespace Installer\Controllers;

use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Installer\Helpers\CompanySetupManager;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;


use Image;

class ProductController extends Controller
{
  public function save(Request $request) {
    $products = \Request::json();
    // dd(Input::all());
    dd(json_decode($request->getContent(), true));

  }
}
