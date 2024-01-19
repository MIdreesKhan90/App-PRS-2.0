<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = "kree_clients";
    protected $primaryKey = 'client_id';
    public $timestamps = false;
    protected $fillable = [
        'cust_id',
        'client_owner',
        'client_cat_id',
        'email',
        'password',
        'company_name',
        'first_name',
        'last_name',
        'city',
        'full_address',
        'state',
        'zip',
        'phone',
        'cell',
        'address',
        'stripe_id',
        'stripe_last4digit',
        'createdDate',
        'lastUpdated',
        'isActive',
        'tax_exempt',
        'reg_by',
        'is_guest'
    ];

    public function categoryData() {
        return $this->hasOne(ClientCategory::class, 'id','client_cat_id');
    }

    public function ownerData(){
        return $this->hasOne(SubCustomer::class, 'id','client_owner');
    }

}
