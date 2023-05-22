<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    // protected $table =['orders'];
    protected  $fillable =['order_type','customer_id','employee_id','payment_option','card_number_id','ship_to','status	','payment_status','shipping_status','order_status','corder_status','order_total','payment_received','insurance_amount','tax_amount',
    'shipping_amount','discount_amount','tax_exempt','transaction_id','tracking_id','discount','discount_id',
    'order_date','processing_date','shipping_date','delivery_date','cancel_date','notes','returned','return_tracking_id','returned_date'];

}
