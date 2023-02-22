<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // 1 roles co nhieu users
    public function users(){
        // return $this->belongsToMany(User::class);
        return $this->belongsToMany(User::class,'role_user','role_id','user_id');
    }
}
