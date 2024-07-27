<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Product;

class HomepageController extends BaseController
{
    public function index()
    {
        // Convert jadi object
        $session = (object)$this->session->get();
        $sliders = (new Slider)->get()->getResult();
        $categories = (new Category)->get()->getResult();
        $products = (new Product())
                ->select('products.*, categories.name as category_name')
                ->join('categories', 'categories.id = products.id_category')
                ->get()
                ->getResult();

        return view('home', compact('sliders', 'categories', 'products', 'session'));
    }

    public function category(string $slug)
    {
        $session = $this->session;

        $AllCategory = (new Category())->get()->getResultObject();
        $IdCategory = (new Category())->where('slug', $slug)->get()->getRow()->id;
        $products = (new Product())
                ->where('id_category', $IdCategory)
                ->select('products.*, categories.name as category_name')
                ->join('categories', 'categories.id = products.id_category')
                ->get()
                ->getResult();

        return view('categories', compact('AllCategory', 'products', 'session'));
    }

    public function productDetail(string $slug)
    {
        $session = $this->session;

        $single_img = base_url('public/uploads/product_single/');
        $detail = (new Product())->where('slug', $slug)->join('single_images', 'single_images.img_parent = products.id')->get()->getRow();

        return view('product_detail', compact('detail', 'single_img', 'session'));
    }

    public function allProduct()
    {
        $session = $this->session;

        $AllCategory = (new Category())->get()->getResultObject();
        $products = (new Product())
                ->select('products.*, categories.name as category_name')
                ->join('categories', 'categories.id = products.id_category')
                ->get()
                ->getResult();

        return view('product', compact('AllCategory', 'products', 'session'));
    }

    public function about()
    {
        $session = $this->session;

        return view('about', compact('session'));
    }

    public function thermscondition()
    {
        $session = $this->session;

        return view('therms_n_condition', compact('session'));
    }

    public function contact()
    {
        $session = $this->session;

        return view('contact', compact('session'));
    }

    public function news()
    {
        $session = $this->session;

        return view('news', compact('session'));
    }

}
