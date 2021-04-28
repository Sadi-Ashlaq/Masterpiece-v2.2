<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
    protected $fillable = [

    	'Brand_Name' , 'Brand_Image'

    ];

    public function Phones(){

    	return $this->hasMany(Phone::class);
    }

    public function Order(){

        return $this->belongsTo(Order::class);
    }
}
