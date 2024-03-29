<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EloquentNangCaoController;
use App\Http\Controllers\ValidatorController;
use App\Http\Controllers\ExeptionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

//URI: huyen
//URI: dang-ky
//URL: tenwebsite.com/dang-ky
// Hien thi trang xxx
Route::get('/create', function(){
    echo 'Trang them moi';
    $name = 'NVA';
    $age = 18;

    return view('products.create', compact(['name','age'])  );

    // Truyen du lieu xuong view
    // $params = [
    //     'name' => $name,
    //     'age'  => $age
    // ];
    // // Goi view
    // return view('products.create',$params);
} );
// Xu ly them du lieu
Route::post('/store',function( Request $request ){
    // Lay du lieu thong thuong
    echo '<pre>';
    print_r( $_REQUEST );
    echo '</pre>';
    echo $_REQUEST['username'];

    // Lay du lieu thong qua doi tuong $request
    // use Illuminate\Http\Request;
    echo '<pre>';
    print_r( $request->all() );
    echo '</pre>';
    echo $request->username;

    die();
    // Goi model xy ly

    // Chuyen huong
});

/*
$args = [
    'prefix' => 'products'
];
Route::group($args,function(){

});
*/

Route::group([
    'prefix' => 'orders'
],function(){
    Route::get('index/{name?}', function ($name = ''){//products/products/index
        return view('products.index');
    });
});

//orders/index
//products/index
Route::group([
    'prefix' => 'products'
],function(){

    Route::get('index/{name?}', function ($name = ''){//products/products/index
        return view('products.index');
    });

    Route::get('create', function (){
        function route($route_name){

            return 'http://127.0.0.1:8000/xxx';
        }
        echo route('thanh-cong');//
        // return view('products.create');
    });

    Route::get('show/{id}', function($id){
        echo 'Ban dang chinh sua id:' .$id;
        return view('products.show');
    });
    
    
    Route::get('edit/{id}', function ($id){
        echo 'Ban dang chinh sua id:' .$id;
        return view('products.edit');
    });
});

//Tien to: products

Route::post('products/store',function(Request $request ){
});
Route::put('products/update/{id}',function(Request $request, $id ){
    echo 'Ban dang chinh sua id:' .$id;
});
Route::delete('products/destroy/{id}', function ($id){
    echo 'Ban dang chinh sua id:' .$id;
});

Route::get('lien-he-codegym',function(){
    return view('form-lien-he');
});

Route::get('lien-he-thanh-cong123',function(){
    return view('lien-he-thanh-cong');
})->name('thanh-cong');
Route::post('xu-ly-lien-he-codegym',function(Request $request){
    // Xac thuc du lieu

    // Luu vao CSDL

    // Chuyen huong
    return redirect()->route('thanh-cong');//http://127.0.0.1:8000/lien-he-thanh-cong123

    return redirect('lien-he-thanh-cong123');//http://127.0.0.1:8000/lien-he-thanh-cong123
});


Route::post('login',function(Request $request){
    //Nhan du lieu
    // todo
    // $_REQUEST;
});

// Photo
// Route::group([
//     'prefix' => 'photos'
// ],function(){
//     Route::get('index',[PhotoController::class,'index'])->name('photos.index');
//     Route::get('show/{id}',[PhotoController::class,'show'])->name('photos.show');
//     Route::get('create',[PhotoController::class,'create'])->name('photos.create');
//     Route::get('edit/{id}',[PhotoController::class,'edit'])->name('photos.edit');
//     Route::put('update/{id}',[PhotoController::class,'update'])->name('photos.update');
//     Route::delete('destroy/{id}',[PhotoController::class,'destroy'])->name('photos.destroy');
//     Route::post('store',[PhotoController::class,'store'])->name('photos.store');
// });

Route::resource('photos',PhotoController::class);

//use App\Http\Controllers\CustomerController;
Route::resource('customers',CustomerController::class);

// Tạo route admin + middware: auth
    //echo trang admin
// Tao route login -> name: login
    //echo trang 
    
Route::get('admin',function(){
    echo 'trang admin';
})->middleware('auth');

Route::get('login123',function(){
    echo 'trang login';
})->name('login');

// uong bia
Route::get(
    'uong-bia/{age}',
    [PhotoController::class,'index']
)->middleware(['checkage','after_middleware']);

// uong nuoc ngot
Route::get('uong-nuoc-ngot',function(){
    echo 'ban duoc uong nuoc ngot';
})->name('uong-nuoc-ngot');


Route::get('admin/test',function(){
    return view('admin.layouts.master');
});

Route::get('test-db',function(){
    // $item = Category::find(2);//null
    // $item = Category::findOrFail(2);//404
    //$item = Category::first();//null
    $item = Category::firstOrFail();//404
    dd($item);
});

Route::get('hasOne',[EloquentNangCaoController::class,'hasOne']);
Route::get('saveHasOne',[EloquentNangCaoController::class,'saveHasOne']);
Route::get('saveHasMany',[EloquentNangCaoController::class,'saveHasMany']);
Route::get('saveBelongsToMany',[EloquentNangCaoController::class,'saveBelongsToMany']);

Route::get('ModelNotFoundException/{id}',[ExeptionController::class,'fun_ModelNotFoundException']);
Route::get('UserNotFoundException',[ExeptionController::class,'fun_UserNotFoundException']);

Route::get('validator/create',[ValidatorController::class,'create'])->name('validator.create');
Route::post('validator/store',[ValidatorController::class,'store'])->name('validator.store');

Route::get('tao_ss',[\App\Http\Controllers\SessionController::class,'tao_ss']);
Route::get('dung_ss',[\App\Http\Controllers\SessionController::class,'dung_ss']);
Route::get('capnhat_ss',[\App\Http\Controllers\SessionController::class,'capnhat_ss']);
Route::get('xoa_ss',[\App\Http\Controllers\SessionController::class,'xoa_ss']);

Route::get('danh-sach-san-pham',[\App\Http\Controllers\ProductController::class,'index']);
Route::get('chi-tiet-san-pham/{id_sp}',[\App\Http\Controllers\ProductController::class,'show']);
Route::post('them_vao_gio',[\App\Http\Controllers\CartController::class,'them_vao_gio']);
Route::post('cap_nhat_gio_hang',[\App\Http\Controllers\CartController::class,'cap_nhat_gio_hang']);
Route::get('xoa_gio_hang/{id_sp}',[\App\Http\Controllers\CartController::class,'xoa_gio_hang']);
Route::get('xem_gio_hang/',[\App\Http\Controllers\CartController::class,'xem_gio_hang']);

Route::get('user_info',function(){
    $user = \App\Models\User::find(1);
    dd($user->group->roles->toArray());
});

Route::resource('users',\App\Http\Controllers\UserController::class);