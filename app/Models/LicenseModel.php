<?php

namespace App\Models;

use CodeIgniter\Model;

class LicenseModel extends Model
{
    protected $table            = 'licenses';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = ['domain', 'license_key'];

    public function checkLicense($domain, $licenseKey)
    {
        return $this->where('domain', $domain)
                    ->where('license_key', $licenseKey)
                    ->countAllResults() > 0;
    }
}
