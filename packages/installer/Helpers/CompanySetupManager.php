<?php

namespace Installer\Helpers;

use Exception;
use Illuminate\Http\Request;
use Core\Repositories\CompanyRepository;

class CompanySetupManager
{

    /**
     * @var string
     */
    private $companyRepository;

    /**
     * Set the .env and .env.example paths.
     */
    public function __construct(CompanyRepository $companyRepository)
    {
        $this->companyRepository =$companyRepository;
    }

    public function createCompany($data)
    {
        try {
            $this->companyRepository->create($data);
        } catch(Exception $e){
            return $this->response($e->getMessage());
        }
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