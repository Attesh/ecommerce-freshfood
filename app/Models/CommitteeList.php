<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommitteeList extends Model
{
    use HasFactory;
    protected $table='committee_list';
    protected $fillable=[

    ];
    public function product()
    {
     return $this->belongsTo(CommitteeCategory::class,'category_id','id');
    }
    public function product1()
    {
        return $this->belongsTo(SubCategory::class,'subcategory_id','id');
    }
}
