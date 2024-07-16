<?php

if (!function_exists('render')) {

    function render(string $input, string $item): string
    {
        if($input == 'category'){
            $PathObj = base_url('public/uploads/category/' . $item);
        }elseif($input == 'product'){
            $PathObj = base_url('public/uploads/product/' . $item);
        }
        return $PathObj;
    }
}
