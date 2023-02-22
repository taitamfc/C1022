<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // N comments thuoc ve 1 user
    public function user(){
        return $this->belongsTo( User::class );
        //user_id (comments) => id (users)
        //return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
