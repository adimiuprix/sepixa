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
        $cart = $this->cart;
        return view('cart', compact('cart'));
    }

    public function AddToCart()
    {
        $data = [
            [
                'id'      => '1',
                'qty'     => 18,
                'price'   => 400,
                'name'    => 'T-Shirt',
            ],
            [
                'id'      => '28',
                'qty'     => 3,
                'price'   => 8900,
                'name'    => 'Sobart Kaleng',
            ],
        ];

        $this->cart->insert($data);

        return redirect()->to('cart');
    }
}
