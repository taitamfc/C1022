<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //1 user co 1 phone
    public function phone(){
        //return $this->hasOne(Phone::class);
        return $this->hasOne(Phone::class,'user_id','id');
    }
    // 1 user co nhieu posts (bai viet)
    public function posts(){
        return $this->hasMany(Post::class);
        // user_id: khoa ngoai tham chieu toi bang hien tai
        // id: khoa chinh cua bang hien tai
        // return $this->hasMany(Post::class,'user_id','id');
    }
    // 1 user co nhieu comments ( binh luan )
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    //https://laravel.com/docs/10.x/eloquent-relationships#many-to-many
    // 1 user co nhieu roles ( vai tro )
    public function roles(){
        //return $this->belongsToMany(Role::class);
        return $this->belongsToMany(Role::class,'role_user','user_id','role_id');
    }

    // khai bao MQH voi Group
    public function group(){
        return $this->belongsTo(Group::class);
    }

    public function hasPermission($role_name){
        // $role_name = 'User_show';
        $user_roles = $this->group->roles->pluck('name')->toArray();
        /*
        0 => "User_viewAny"
        1 => "User_create"
        */
        if( in_array($role_name,$user_roles) ){
            return true;
        }else{
            return false;
        }
    }
}
