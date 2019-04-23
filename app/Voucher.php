<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $fillable = [

        'product_id', "voucher", "start_date", "end_date"

    ];

    public function Products(){
        
        return $this->belongsTo('App\Product');
    
    }
}
