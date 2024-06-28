<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LicenseModel;

class DomainCheckController extends BaseController
{
    public function index($domain)
    {
        // Instansiasi LicenseModel
        $checkDom = new LicenseModel();
                
        // Melakukan pengecekan terhadap domain di database
        $result = $checkDom->where('domain', $domain)->first();

        // Menyiapkan response
        if ($result) {
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Domain is valid',
                'data' => $result
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Domain is invalid'
            ])->setStatusCode(404);
        }
    }
}
