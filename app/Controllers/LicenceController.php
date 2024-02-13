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
        $domain = $this->request->getPost('domain');
        $licenseKey = $this->request->getPost('license_key');
        
        // Pemeriksaan lisensi
        $isValid = $this->licenseModel->checkLicense($domain, $licenseKey);

        if ($isValid) {
            echo 'Lisensi valid!';
        } else {
            echo 'Lisensi tidak valid!';
        }
    }

    // Endpoint untuk melakukan pengecekan lisensi
    public function endpoint()
    {
        $response = [
            'status' => false,
            'message' => 'Lisensi tidak valid'
        ];

        $domain = $this->request->getPost('domain');
        $licenseKey = $this->request->getPost('license_key');

        if (!empty($domain) && !empty($licenseKey)) {
            $isValid = $this->licenseModel->checkLicense($domain, $licenseKey);
            if ($isValid) {
                $response['status'] = true;
                $response['message'] = 'Lisensi valid';
            }
        }

        return $this->response->setJSON($response);
    }
}
