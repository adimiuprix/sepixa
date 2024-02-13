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
        $status = false; // Set status awal menjadi false
        $message = "License invalid"; // Set pesan default
    
        $domain = $this->request->getPost('domain');
        $licenseKey = $this->request->getPost('license_key');
    
        if (!empty($domain) && !empty($licenseKey)) {
            $isValid = $this->licenseModel->checkLicense($domain, $licenseKey);
            if ($isValid) {
                // Jika lisensi valid, ubah status menjadi true
                // dan ubah pesan menjadi "License valid"
                $status = true;
                $message = "License valid";
            }
        }
    
        return $this->response->setJSON(['status' => $status, 'message' => $message]);
    }
}