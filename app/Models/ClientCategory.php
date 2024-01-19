<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientCategory extends Model
{
    use HasFactory;
    protected $table = "kree_client_categories";
    public $timestamps = false;

    protected $fillable = [
        'cust_id',
        'cat_name'
    ];
    
}
