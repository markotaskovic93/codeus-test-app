<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Voucher;
use App\Precentage;

class ProductController extends Controller
{
    
    public function index(){

        $products = Product::all();
        $vouchers = Voucher::all();

        return view('index', compact('products', 'vouchers'));

    }

    public function admin(){

        $products = Product::all();
        $vouchers = Voucher::all();

        return view('admin/all-products', compact('products', 'vouchers'));

    }

    public function buyProduct($id){

        Product::find($id)->delete();
        Voucher::where('product_id', $id)->delete();

        return redirect()->back();

    }

    public function editProduct($id){

        $product = Product::find($id);

        $voucher = Product::find($id)->Voucher;
        $precentage = Precentage::all();

        return view('admin/edit-product', compact('product', 'voucher', 'precentage'));

    }

    public function deleteVoucher($id){

        Voucher::find($id)->delete();

        return redirect()->back();

    }

    public function addVoucher(Request $request){

        $voucher = new Voucher();

        $voucher->product_id = request('product_id');
        $voucher->voucher = request('voucher');
        $voucher->start_date = request('start_date');
        $voucher->end_date = request('end_date');

        $voucher->save();

        return redirect()->back();

    }


    public function addProduct(Request $request){

        $product = new Product();

        $product->title = request('title');
        $product->price = request('price');

        $product->save();

        return redirect()->back();

    }


}
