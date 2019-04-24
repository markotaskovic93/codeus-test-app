<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Voucher;
use App\Precentage;

class ApiController extends Controller
{
    
    public function getAllProducts(){

        $products = Product::all();

        return response($products)->header('Content-Type', 'application/json');

    }

    public function addProduct(Request $request){

        $product = new Product();

        $product->title = request('title');
        $product->price = request('price');

        $product->save();

        return "Product is added !";

    }

    public function deleteProduct($id){

        $product = Product::find($id)->delete();

        return "Product is deleted";

    }

}
