<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
protected $fillable=['customer_name','customer_surname','customer_email',
'customer_address','amount','order_active','notes'];

public function dishes(){
    return  $this->belongsToMany('App\Dish');
}
}
