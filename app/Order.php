<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

  protected $fillable = [
      'state', 'active', 'user_id',
  ];

  public function user()
  {
      return $this->belongsTo('App\User');
  }

    public function items()
    {
        return $this->hasMany('App\Item');
    }

    public function total()
    {
        $total = 0;
        foreach($this->items as $item)
        {
          $total = $total + $item->subtotal();
        }

        return number_format($total, 2, '.', '');
    }

    public function addItem(Item $item)
    {
		    $this->items()->save($item);
	  }

    public function products()
    {
        $total = 0;
        foreach($this->items as $item)
        {
          $total = $total + $item->quantity;
        }

        return $total;
    }
}
