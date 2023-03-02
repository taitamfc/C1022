<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function them_vao_gio(Request $request){
        $id_sp = $request->product_id;
        $sl = $request->quantity;
 
        // Lay ra mang cart
        $cart = session()->get('cart');
        // Gan chi so id_sp = $sl

        if( isset( $cart[$id_sp] ) ){
            //lay so luong cu
            $sl_cu = $cart[$id_sp];
            //cong sl cu cho gia tri moi
            $sl_moi = $sl_cu + $sl;
            // Gan vao mang
            $cart[$id_sp] = $sl_moi;
        }else{
            $cart[$id_sp] = $sl; //2 => 10
        }
        // Cap nhat lai cart
        session()->put('cart',$cart);

        //Chuyen huong ve trang
        return redirect('xem_gio_hang');
    }

    public function xoa_gio_hang($id_sp){
        // Lay ra mang cart
        $cart = session()->get('cart');
        // Xoa mang cart theo chi so
        unset( $cart[$id_sp] );
        // Cap nhat lai cart
        session()->put('cart',$cart);
        
        //Chuyen huong ve trang
        return redirect('xem_gio_hang');

    }

    public function xem_gio_hang(){
        
        $cart = session()->get('cart');
        $so_luong = $cart;

        $product_ids = array_keys($cart);
        // Model
        $products = Product::whereIn('id',$product_ids)->get();

        // Xem so luong cua san pham dua vao id sp
        return view('web.cart.cart', compact('cart','products') );
    }
    public function cap_nhat_gio_hang(Request $request){
        
        $cart = session()->get('cart');
        $quantity = $request->quantity;
        session()->put('cart',$quantity);
        // echo '<pre>';
        // print_r($cart);
        // print_r($quantity);
        // echo '</pre>';
        // die();

         //Chuyen huong ve trang
         return redirect('xem_gio_hang');

       
    }


}
