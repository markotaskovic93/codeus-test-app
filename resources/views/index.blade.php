@extends('layouts.master')

@section('title', 'Codeus Test APP')

@section('scripts')

    <style>
        
        .badge{
            margin-right: 5px;
        }
    
    </style>

@endsection


@section('content')

    <div class="container">
        <div class="row">

            <div class="col-12 text-right">
                <a class="btn btn-primary" href="/admin">Dashboard</a>
            </div>

            <div class="col-12">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Product Title</th>
                            <th scope="col">Price</th>
                            <th scope="col">Discount Vouchers</th>
                            <th scope="col">Price after discount</th>
                            <th scope="col">Buy</th>
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

                                        @if($voucher->end_date < date('Y-m-d'))

                                            no Active Vouchers

                                        @else

                                            <span class="badge badge-primary">{{ $voucher->voucher }}%</span>

                                            <?php $discount += $voucher->voucher; if($discount > 60){ $discount = 60; } ?>
                                         
                                        @endif

                                    @endif

                                @endforeach

                            </td>
                            <td><b>${{ $product->price - (($product->price / 100) * $discount) }}</b></td>
                            <td><a class="btn btn-primary" href="/admin/buy-product/{{ $product->id }}">Buy</a></td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection

