<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credit_card_detail extends Model
{
    use HasFactory;
    protected $fillable = ['card_number','card_cvc','card_expiry','card_type'];
}
