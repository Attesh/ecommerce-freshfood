<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    use HasFactory;
	protected $table='product';
	protected $fillable=[
	'product_name'
	];


	public function product()
	{

		return $this->hasMany(LiveProduct::class);
	}
		public function model()
	{

		return $this->hasMany(LiveModel::class);
	}
	public function category()
    {
        return $this->belongsTo('App\Models\Category' ,'category_id','id' );
    }
	public function subcategory()
    {
        return $this->belongsTo('App\Models\SubCategory' ,'Sub_category','id' );
    }
}
