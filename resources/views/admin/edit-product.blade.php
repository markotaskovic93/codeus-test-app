@extends('layouts.master')

@section('scripts')

    <style>

        .title{
            margin-bottom: 30px;
            border-bottom: 1px dashed #000;
        }

        table tr td span a{
            color: #fff;
            margin-left: 10px;
        }
    
    </style>

@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 title">
                <div class="row">
                    <div class="col-6">
                        <h2>Edit Product</h2>
                    </div>
                    <div class="col-6 text-right">
                        <a class="btn btn-primary" href="/admin">Back</a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Product title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Active Vouchers</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{ $product->title }}</th>
                            <td><b>${{ $product->price }}</b></td>
                            <td>
                                
                                @foreach($voucher as $vouch)

                                    <span class="badge badge-primary">{{ $vouch->voucher }}% <a href="/admin/delete-voucher/{{ $vouch->id }}">Delete vaucher</a></span>

                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-12" style="margin-top: 50px;">

                    <h2>Add Voucher</h2>
                    <form action="/admin/add-voucher" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}" />
                        <select name="voucher">

                            @foreach($precentage as $precent)

                                <option value="{{ $precent->discount }}">{{ $precent->discount }}%</option>

                            @endforeach
                        </select>

                        <label for="start">Start date</label>
                        <input type="text" name="start_date" placeholder="YYYY-MM-DD" required 
                        pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" 
                        title="Enter a date in this format YYYY-MM-DD"/>
                        
                        <label for="end">End date</label>
                        <input type="text" name="end_date" placeholder="YYYY-MM-DD" required 
                        pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" 
                        title="Enter a date in this format YYYY-MM-DD"/>

                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
            </div>
        </div>
    </div>

@endsection