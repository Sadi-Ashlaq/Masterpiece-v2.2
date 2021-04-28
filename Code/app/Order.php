<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [

        'Device' , 'Damage','AppointmentTime','Color','Location', 'Price','Username','UserPhone'
    ];
    public function save(array $options = array())
    {
        if(empty($this->Price)) {
            $this->Price = rand(10,50);
        }
        return parent::save($options);
    }
    public function setDamageAttribute($value)
    {
        $this->attributes['Damage'] = json_encode($value);
    }
//    public function getDamageAttribute($value)
//    {
//        return $this->attributes['Damage'] = json_decode($value);
//    }
}
