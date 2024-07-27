<?php

namespace App\Models;

use CodeIgniter\Model;

class Slider extends Model
{
    protected $table            = 'sliders';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['title', 'content', 'direct_to', 'image'];
}
