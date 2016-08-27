<?php

namespace Core\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $name;

    protected $description;

    protected $price;

    protected $currencyAbbr;

    protected $mainPictureURL;

    protected $isMain;

    protected $rank;

    protected $fillable = array('name', 'description', 'price', 'currencyAbbr', 'mainPictureURL', 'isMain','rank');
}
