<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
      public function section()
      {
          return $this->belongsTo('App\Section');
      }

      public function group()
      {
          return $this->belongsTo('App\Group');
      }

      public function color()
      {
          return $this->belongsTo('App\Color');
      }

      public function increase()
      {
          return $this->belongsTo('App\Increase');
      }

      public function images()
      {
          return $this->hasMany('App\Image');
      }

      public function description()
      {
          if($this->description){
            $description = explode('.', $this->description);
            return $description;
          }else{
            return "Sin decripción.";
          }

      }

      public function price()
      {
          return number_format($this->price, 2, '.', '');
      }

      public function subTotal($q)
      {
          $subTotal = $this->price * $q;
          return number_format($subTotal, 2, '.', '');
      }
}
