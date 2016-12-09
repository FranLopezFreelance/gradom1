<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

  protected $fillable = [
      'product_id', 'order_id', 'price', 'quantity'
  ];

  public function order()
  {
      return $this->belongsTo('App\Order');
  }

  public function product()
  {
      return $this->belongsTo('App\Product');
  }

  public function subtotal()
  {
      $subtotal = $this->price * $this->quantity;

      return number_format($subtotal, 2, '.', '');
  }

}
