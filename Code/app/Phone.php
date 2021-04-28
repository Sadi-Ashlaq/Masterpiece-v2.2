<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    //
    protected $fillable = [

    	'Phone_Name' , 'Phone_Brand','Phone_Image', 'brand_id'

    ];

    public function Brand(){

    	return $this->belongsTo(Brand::class);
    }
    public function Order(){

        return $this->belongsTo(Order::class);
    }
}
