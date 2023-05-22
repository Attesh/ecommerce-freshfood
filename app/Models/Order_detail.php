<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    use HasFactory;
    // protected $table =['order_details'];

    protected $fillable =['order_id','item_id','item_quantity','item_color',
    'item_price','item_image','subtotal','sale_price'];

}
