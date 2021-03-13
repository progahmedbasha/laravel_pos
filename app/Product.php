<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['id', 'barcode', 'name', 'buy_price', 'sell_price', 'qty', 'total_buy_price', 'total_sell_price', 'category_id'];
    protected $table = "products";


    public function category()
    {
      return $this->belongsTo('App\Category');
    }

    public function supplier()
    {
       return $this->belongsTo('App\Supplier', 'sup_id');
    }


}
