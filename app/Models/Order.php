<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $fillable = ['name','email','address','phone','customer_id','note','status'];


    public function cus()
    {
        return $this->hasOne(Customer::class,'id','customer_id');
    }

    public function details()
    {
        return $this->hasMany(OrderDetail::class,'order_id','id');
    }
    public $timestamps = false;
}
