@extends('layouts.master')

@section('scripts')

    <style>

        .title{
            margin-bottom: 30px;
            border-bottom: 1px dashed #000;
        }

    </style>

@endsection

@section('title', 'Dashboard')

@section('content')


    <div class="container">

        <div class="row">
            <div class="col-12 title">
                <div class="row">
                    <div class="col-6">
                        <h2>Add Product</h2>
                    </div>
                    <div class="col-6 text-right">
                        <a class="btn btn-primary" href="/">Home</a>
                    </div>
                </div>
                
            </div>
            <div class="col-12">
                <form action="/admin/add-product" method="POST">
                    <div class="row">
                    
                        @csrf
                        <div class="col-5">
                            <input class="form-control" type="text" name="title" placeholder="Product title" />
                        </div>
                        <div class="col-5">
                            <input class="form-control" type="number" name="price" placeholder="Product price" />
                        </div>
                        <div class="col-2">
                            <button class="btn btn-primary">Add Product</button>
                        </div>
            
                    </div>
                </form>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-12 title">
                <h2>All Product</h2>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Product Title</th>
                            <th scope="col">Price</th>
                            <th scope="col">Active Vouchers</th>
                            <th scope="col">Edit Product</th>
                        </tr>
                    </thead>
                    <tbody>
                
                
                        @foreach($products as $product)
                
                        <tr>
                            <th scope="row">{{ $product->title }}</th>
                            <td><b>${{ $product->price }}</b></td>
                            <td>
                                
                                <?php $discount = 0; ?>
                
                                @foreach($vouchers as $voucher)
                
                                    @if($product->id == $voucher->product_id)
                
                                        @if($voucher->start_date >= date('Y-m-d') && $voucher->end_date <= date('Y-m-d'))
                                            
                                            <span class="badge badge-primary">{{ $voucher->voucher }}%</span>
                    
                                            <?php $discount += $voucher->voucher; if($discount > 60){ $discount = 60; } ?>
                                           
                                        @else
                                
                                            no Active Vouchers            
                                            
                                        @endif
                
                                    @endif
                
                                @endforeach
                
                            </td>
                            <td><a class="btn btn-primary" href="/admin/edit-product/{{ $product->id }}">Edit Product</a></td>
                        </tr>
                
                        @endforeach
                
                    </tbody>
                </table>
            </div>
        </div>

    </div>


@endsection