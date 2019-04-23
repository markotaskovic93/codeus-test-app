<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Voucher;

class ProductController extends Controller
{
    
    public function index(){

        $products = Product::all();
        $vouchers = Voucher::all();

        return view('index', compact('products', 'vouchers'));

    }

    public function admin(){

        

    }

}
