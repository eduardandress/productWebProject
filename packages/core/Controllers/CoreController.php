<?php 

namespace Core\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Core\Repositories\CompanyRepository;
 
class CoreController extends Controller
{
 
    protected $companyInfo;

    public function __construct(CompanyRepository $companyRepository) {
      $this->companyRepository = $companyRepository;
      $this->companyInfo = $this->companyRepository->first($columns = ['*']);
    }
    
    /**
    * Landing page
    */
    public function index() {
        return view('core::pages.home', array('companyInfo' => $this->companyInfo));
    }
    
    /**
     * All products page
     */
    public function products() {
        return view('core::pages.products', array('companyInfo' => $this->companyInfo));
    }

    /**
     * About us page
     */
    public function about() {
        return view('core::pages.about', array('companyInfo' => $this->companyInfo));
    }

    /**
     * Contact us page
     */
    public function contact() {
        return view('core::pages.contact', array('companyInfo' => $this->companyInfo));
    }
}
