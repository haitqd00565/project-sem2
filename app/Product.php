<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function getDiscountPriceAttribute()
    {
        if ($this->discount == 0) {
            return sprintf('%s (vnd)', number_format($this->price, 0));
        }
        return sprintf('%s (vnd)', number_format(($this->price - ($this->price * $this->discount / 100)), 0));
    }

    public function getOriginalPriceAttribute()
    {
        if ($this->discount == 0) {
            return '';
        }
        return sprintf('%s', number_format($this->price, 0));
    }

    public function isNew()
    {
        // sản phẩm được tạo trong vòng bảy ngày thì là sản phẩm mới.
        return time() - (60 * 60 * 24 * 7) < strtotime($this->created_at);
    }

}
