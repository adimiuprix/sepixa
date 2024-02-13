<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LicenseModel;

class LicenceController extends BaseController
{
    public function __construct()
    {
        $this->licenseModel = new LicenseModel();
    }

    public function index(){
        return view('form');
    }

    public function checkLicence()
    {
        $status = false;
        $message = "License invalid";
    
        $domain = $this->request->getPost('domain');
        $licenseKey = $this->request->getPost('license_key');
    
        if (!empty($domain) && !empty($licenseKey)) {
            $isValid = $this->licenseModel->checkLicense($domain, $licenseKey);
            if ($isValid) {
                $status = true;
                $message = "License valid";
            }
        }
    
        return $this->response->setJSON(['status' => $status, 'message' => $message]);
    }
}