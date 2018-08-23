<?php
/**
 * Created by PhpStorm.
 * User: xuanhung
 * Date: 8/21/18
 * Time: 8:50 PM
 */

namespace App;


class ShoppingCart
{
    function __construct()
    {
        $this->items = array();
    }

    function getTotalMoney(){
        $total_money = 0;
        foreach ($this->items as $item){
            $total_money += $item->product->discountPrice * $item->quantity;
        }
        return $total_money;
    }

    function getTotalMoneyWithFormat(){
        return sprintf('%s', number_format($this->getTotalMoney(), 0));
    }
}