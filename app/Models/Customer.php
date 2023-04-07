<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Customer extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'customer';

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
    ];

    public function order_list()
    {
        return $this->hasMany(Orders::class,'customer_id','id');
    }
}
