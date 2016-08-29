<?php 

namespace Core\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Core\Repositories\CompanyRepository;
use Core\Repositories\ProductRepository;
use Core\Repositories\ClientRepository;


 
class CoreController extends Controller
{
 
    protected $companyInfo;
    protected $productRepository;
    protected $clientRepository;

    public function __construct( CompanyRepository $companyRepository, ProductRepository $productRepository, ClientRepository $clientRepository) {

      $this->companyRepository = $companyRepository;
      $this->companyInfo = $this->companyRepository->first($columns = ['*']);
      $this->productRepository = $productRepository;
      $this->clientRepository = $clientRepository;
    }
    
    /**
    * Landing page
    */
    public function index() {
        return view('core::EJCTemplate.pages.home', array(
                'companyInfo' => $this->companyInfo,
                'bestProducts' => $this->productRepository->orderBy('rank', 'desc')->paginate(3),
                'clients' => $this->clientRepository->all(),
                )
        );
    }
    
    /**
     * All products page
     */
    public function products() {
        return view('core::EJCTemplate.pages.products', array(
                'companyInfo' => $this->companyInfo,
                'allProducts' => $this->productRepository->all(),
            )
        );
    }

    /**
     * About us page
     */
    public function about() {
        return view('core::EJCTemplate.pages.about', array('companyInfo' => $this->companyInfo));
    }

    /**
     * Contact us page
     */
    public function contact() {
        return view('core::EJCTemplate.pages.contact', array('companyInfo' => $this->companyInfo));
    }
}
