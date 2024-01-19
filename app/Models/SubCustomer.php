<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
//use Laravel\Passport\HasApiTokens;

class SubCustomer extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = "kree_sub_customers";
    public $timestamps = false;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password'
    ];
    public function customerOption() {
        return $this->hasOne(Customer::class,'cust_id')->where([
            ['isActive','=', 1],
            ['isSuspended','=', 8],
            ['type','=', 'Customer']
            ]);
    }
}
