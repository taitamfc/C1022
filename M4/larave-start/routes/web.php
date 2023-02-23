<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\CustomerController;
use App\Models\Category;
use App\Models\User;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Comment;
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

Route::get('hasOne',function(){
    //tim user co id = 1
    // $item = User::where('id','=',1)->first();
    $item = User::find(1);
    dd($item->roles);

    // Chi load MQH Phone
    // $item = User::with('comments')->find(1);
    // dd($item->toArray());
    // dd($item->phone);
});

Route::get('saveHasOne',function(){
    // quanly
    $user = new User();
    $user->name = 'quan ly';
    $user->password = '12345';
    $user->image = 'image';
    $user->email = 'quanly@gmail.com';
    $user->birthday = '2023-02-23';
    $user->save(); //$user->id

    //$user->id
    $phone = new Phone();
    $phone->phone = '123456789';
    $phone->user_id = $user->id;
    $phone->save();
});

Route::get('saveHasMany',function(){
    // post
    $post = new Post();
    $post->title = 'Bai viet moi';
    $post->user_id = 1;
    $post->save();//$post->id

    $comments = [
        [
            'content' => 'Dep qua',
            'user_id' => 1
        ],
        [
            'content' => 'Hay qua',
            'user_id' => 1
        ]
    ];

    foreach( $comments as $comment ){
        /*
        [
            'content' => 'Dep qua',
            'user_id' => 1
        ]
        */
        $objComment = new Comment();
        $objComment->content = $comment['content'];
        $objComment->user_id = $comment['user_id'];
        $objComment->post_id = $post->id;
        $objComment->save();
    }


});

Route::get('saveBelongsToMany',function(){
    $array_roles = [
        [
            'name' => 'Bao ve sang'
        ],
        [
            'name' => 'Bao ve chieu'
        ]
    ];
    // Tao user
    $user = new User();
    $user->name = 'bac bao ve';
    $user->password = '12345';
    $user->image = 'image';
    $user->email = 'bacbaove@gmail.com';
    $user->birthday = '2023-02-23';
    $user->save(); //$user->id
    // Tao role
    foreach( $array_roles as $array_role ){
        $role = new Role();
        $role->name = $array_role['name'];
        $role->save();//$role->id
        // Set quyen
        $role_user = new RoleUser();
        $role_user->user_id = $user->id;
        $role_user->role_id  = $role->id;
        $role_user->save();
    }
});