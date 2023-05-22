<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
class Members_profile extends Model
{
   
    use HasApiTokens, HasFactory, Notifiable;
    // protected $table = 'members_profiles';
    protected $fillable = [
        'first_name','email','last_name','password','company','country_id','address','phone','gender',
        'dob','image','facebook','twitter','instagram','linkedin',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
