<?php 

namespace Core\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Core\Repositories\CompanyRepository;
use Core\Repositories\ProductRepository;

 
class CoreController extends Controller
{
 
    protected $companyInfo;

    protected $productRepository;

    public function __construct( CompanyRepository $companyRepository, ProductRepository $productRepository) {

      $this->companyRepository = $companyRepository;
      $this->companyInfo = $this->companyRepository->first($columns = ['*']);
      $this->productRepository = $productRepository;

    }
    
    /**
    * Landing page
    */
    public function index() {
        /* get the template colors to use */
        $templateColors = config('core.packageConfig.templateColors');
        return view('core::pages.home', array(
                'companyInfo' => $this->companyInfo,
                'bestProducts' => $this->productRepository->orderBy('rank', 'desc')->paginate(3),
                'colors' => $templateColors
                )
        );
    }
    
    /**
     * All products page
     */
    public function products() {
        return view('core::pages.products', array(
                'companyInfo' => $this->companyInfo,
                'allProducts' => $this->productRepository->all()
            )
        );
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
