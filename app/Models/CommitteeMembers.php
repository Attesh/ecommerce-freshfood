<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommitteeMembers extends Model
{
    use HasFactory;
    protected $table='committee_members';
    protected $fillable=[

    ];
    // public function members()
    //             {
    //              return $this->belongsTo(CommitteeList::class,'committee_id','id');
    //             }
    
}
