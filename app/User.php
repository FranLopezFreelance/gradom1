<?php

namespace App;

use App\Order;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function orders(){
      return $this->hasMany('App\Order');
    }

    public function pendingOrders(){
      if($this->usertype_id == 1){
        $orders = Order::where('state', 2)
                ->where('user_id', $this->id)->get();
          return $orders;
      }else{
        $orders = Order::where('state', 2)->get();
          return $orders;
      }

    }

    public function deliveredOrders(){
      if($this->usertype_id == 1){
        $orders = Order::where('state', 3)
                ->where('user_id', $this->id)->get();
      }else{
        $orders = Order::where('state', 3)->get();
      }
        return $orders;
    }
}
