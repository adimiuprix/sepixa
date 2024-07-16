<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Category;
use App\Models\Product;

class HomepageController extends BaseController
{
    public function index()
    {
        $img_cat = base_url('public/uploads/category/');
        $img_prod = base_url('public/uploads/product/');
        $categories = (new Category)->get()->getResult();
        $products = (new Product())->get()->getResult();
        // dd($products);
        return view('home', compact('img_cat', 'img_prod', 'categories', 'products'));
    }
}
