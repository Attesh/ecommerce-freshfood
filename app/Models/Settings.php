<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    protected $fillable =[ ' shop_address', 'shop_phone', 'shop_fax', 'shop_email', 'shop_website', 'shop_lat', 'shop_lng', 'shop_name', 'shop_description', 'shop_fb', 'shop_tw', 'shop_li', 'shop_gp', 'shop_in', 'shop_yt', 'shop_logo', 'shop_footer_logo',
'shop_address_ar','shop_name_ar','shop_description_ar'

];
}
