<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Category;
use App\Models\Product;

class HomepageController extends BaseController
{
    public function index()
    {
        $categories = (new Category)->get()->getResult();
        $products = (new Product())
                ->select('products.*, categories.name as category_name')
                ->join('categories', 'categories.id = products.id_category')
                ->get()
                ->getResult();

        return view('home', compact('categories', 'products'));
    }
}
