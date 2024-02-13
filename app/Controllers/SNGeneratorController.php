<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LicenseModel;
use Rundiz\SerialNumberGenerator\SerialNumberGenerator;

class SNGeneratorController extends BaseController
{
    public function index(){
        return view('formgen');
    }

    public function generate()
    {        
        // Get instance SerialNumberGenerator via Dependency Injection
        $SnGenerator = new SerialNumberGenerator();
        $LicenseModel = new LicenseModel();

        $data = [
            'domain' => $this->request->getVar('domain'),
            'license_key' => $SnGenerator->generate(),
        ];

        $LicenseModel->insert($data);

        return redirect()->to('generate');
    }
}
