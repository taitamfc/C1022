<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // post se thuoc ve 1 user
    public function user(){
        //user_id (posts) => id (users)
        //return $this->belongsTo(User::class,'user_id','id');
        return $this->belongsTo(User::class);
    }

    //1 post co nhieu comments
    public function comments(){
        //return $this->hasMany(Comment::class,'post_id','id');
        return $this->hasMany(Comment::class);
    }
}
