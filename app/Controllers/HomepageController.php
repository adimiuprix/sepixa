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

    public function category(string $slug)
    {
        $AllCategory = (new Category())->get()->getResultObject();
        $IdCategory = (new Category())->where('slug', $slug)->get()->getRow()->id;
        $products = (new Product())->where('id_category', $IdCategory)->findAll();

        return view('categories', compact('AllCategory'));
    }

    public function productDetail(string $slug)
    {
        $detail = (new Product())->where('slug', $slug)->get()->getRow();

        return view('product_detail', compact('detail'));
    }

    public function allProduct()
    {
        $AllCategory = (new Category())->get()->getResultObject();
        $products = (new Product())->findAll();

        return view('product', compact('AllCategory', 'products'));
    }

    public function about()
    {
        return view('about');
    }

    public function thermscondition()
    {
        return view('therms_n_condition');
    }

    public function contact()
    {
        return view('contact');
    }

    public function news()
    {
        return view('news');
    }

}
