<?php

namespace Installer\Helpers;

use Exception;
use Illuminate\Http\Request;
use Core\Repositories\ProductRepository;

class ProductSetupManager
{

    /**
     * @var string
     */
    private $productRepository;

    /**
     * Set the .env and .env.example paths.
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository =$productRepository;
    }

    public function createProduct($data, $replace = true)
    {
        try {

            if($replace) {
                \DB::table('product')->truncate();
            }

            $this->productRepository->create($data);
          
        } catch(Exception $e){
            return $this->response($e->getMessage());
        }

        return $this->response('Product created!', 'success');
    }



    /**
     * Return a formatted error messages.
     *
     * @param $message
     * @param string $status
     * @return array
     */
    private function response($message, $status = 'danger')
    {
        return array(
            'status' => $status,
            'message' => $message
        );
    }


  
}