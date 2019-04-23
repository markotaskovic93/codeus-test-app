<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $fillable = [

        "id", "title", "price"

    ];

    public function Voucher(){

        return $this->hasMany(Voucher::class);

    }

}
