<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    /** @use HasFactory<\Database\Factories\UserProfileFactory> */
    use HasFactory;
    protected $fillable=['user_id','first_name','mobil'];
    public $primaryKey='user_id';
    public $incrementing=false;

    public function User(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
