<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function index(){
        $items = Product::all();
        return view('web.products.index', compact('items') );
    }
    public function show($id_sp){
        $item = Product::find($id_sp);
        return view('web.products.index', compact('item') );
    }
}
