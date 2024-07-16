<?php

namespace App\Models;

use CodeIgniter\Model;

class Category extends Model
{
    protected $table            = 'categories';
    protected $primaryKey       = 'id';
    protected $protectFields    = true;
    protected $returnType       = 'object';
    protected $allowedFields    = ['name', 'slug', 'image'];
}
