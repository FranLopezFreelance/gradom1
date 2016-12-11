<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{

  public function products(){
      return $this->hasMany('App\Product');
  }

  public function childrens(){
      return $this->hasMany('App\Section');
  }

  public function mother(){
      return $this->belongsTo('App\Section', 'section_id');
  }

  public function images(){
      return $this->hasMany('App\Sectimage');
  }

  public function productsInOrder($order, $id){
    $total = 0;
    foreach($order->items as $item){
      if($item->product->section_id == $id){
        $total += 1;
      }
    }
    return $total;
  }
}
