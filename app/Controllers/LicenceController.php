<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LicenseModel;

class LicenceController extends BaseController
{
    /**
     * @var LicenseModel
    */
    protected $licenseModel;

    public function __construct()
    {
        $this->licenseModel = new LicenseModel();
    }

    public function index(){
        $session = $this->session;
        return view('licence_check', compact('session'));
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

    public function endpoint()
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