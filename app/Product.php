<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'product_code';
 
    public $incrementing = false;
 
    protected $fillable = [
      'product_code', 'user_id', 'product_name', 'category_id', 'first_stock', 'total_stock', 'buy_price', 'sell_price', 'unit', 'stock_in', 'stock_out'
    ];

    public function user(){
      return $this->belongsTo('App\User', 'user_id');
    }

    public function categories(){
      return $this->belongsTo('App\Categories', 'category_id');
    }

    public function orderdetail(){
      return $this->hasMany('App\OrderDetail', 'product_code');
    }

    public function salesdetail(){
      return $this->hasMany('App\SalesDetail', 'product_code');
    }
}
