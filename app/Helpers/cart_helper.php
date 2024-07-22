<?php
use ci4shoppingcart\Libraries\Cart;
if (!function_exists('cart')) {

    function cart()
    {
        $cart = (new Cart())->total_items();

        return $cart;
    }
}
