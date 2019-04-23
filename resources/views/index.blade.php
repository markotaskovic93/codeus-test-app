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
                        <tr>
                            <th scope="row">First Product</th>
                            <td>$12.50</td>
                            <td><span class="badge badge-primary">10%</span><span class="badge badge-primary">15%</span></td>
                            <td><b>$8.30</b></td>
                            <td><a class="btn btn-primary" href="#">Buy</a></td>
                        </tr>
                        <tr>
                            <th scope="row">First Product</th>
                            <td>$12.50</td>
                            <td><span class="badge badge-primary">10%</span><span class="badge badge-primary">15%</span></td>
                            <td><b>$8.30</b></td>
                            <td><a class="btn btn-primary" href="#">Buy</a></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection

