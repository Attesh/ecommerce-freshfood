<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TermsDetail extends Model
{
    use HasFactory;
    protected $table = "content_details";
    protected $primarykey = "id";

    public function content()
    {
        return $this->belongsTo(Content::class, 'content_id', 'id');
    }
}
