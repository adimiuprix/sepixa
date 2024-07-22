<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use ci4shoppingcart\Libraries\Cart;

class ShoppingCartController extends BaseController
{
    private $cart;

    public function __construct()
    {
        $this->cart = new Cart();
    }

    public function Cart()
    {
        $session = $this->session;

        $imgcart = base_url('public/uploads/product/');
        $cart = $this->cart;
        $tot_item_cart = $cart->total_items();

        return view('cart', compact('cart', 'imgcart', 'tot_item_cart', 'session'));
    }

    public function AddToCart()
    {
        $data = [
            'id'    => $this->request->getPost('id_product'),
            'name'    => $this->request->getPost('name'),
            'code'      => $this->request->getPost('code'),
            'qty'     => $this->request->getPost('quantity'),
            'price'   => $this->request->getPost('price'),
            'image'   => $this->request->getPost('image'),
        ];

        $this->cart->insert($data);

        return redirect()->to('cart');
    }

    public function RemoveCart($rowid)
    {
        // $rowid = 'c4ca4238a0b923820dcc509a6f75849b';

        $this->cart->remove($rowid);

        return redirect()->to('cart');
    }

    public function UpdateCart($rowid){
        $data = [
            'rowid' => $rowid,
            'qty'   => $this->request->getVar('quantity')
        ];

        $this->cart->update($data);

        return redirect()->to('cart');
    }

    public function Checkout(){
        $session = $this->session;

        if (!session()->has('user_id')) {
            return redirect()->to('login');
        }

        return view('checkout', compact('session'));
    }

}
