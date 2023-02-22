<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//categoryes
class Category extends Model
{
    use HasFactory;
    //ket noi den he quan tri CSDL
    protected $connection = 'mysql';

    // Khai bao ten bang ma model se lam viec
    protected $table = 'categories';
    //Khai bao khoa chinh
    protected $primaryKey = 'id';
    // Khai bao bang ko co created_at,updated_at

    // public $timestamps = false;
    // thay the cho created_at
    const CREATED_AT = 'creation_date';
    // thay the cho updated_at
    const UPDATED_AT = 'updated_date';

    protected $fillable = ['name','description'];

    /*
    $flight = Category::create([
        'name' => 'London to Paris',
        'description' => '123',
    ]);
    $category = new Category();
    $category->name = 'London to Paris';
    $category->description = '123';
    $category->save();
    */


}
