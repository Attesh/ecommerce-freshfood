<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog_comments extends Model
{
    use HasFactory;
    protected $fillable =['blog_id','user_id','comment','comment_id'];

    // Post model (Post.php)

public function user()
{
    return $this->belongsTo(User::class)->select(['id', 'first_name']);
}



}
