<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'kree_orders';
    public $timestamps = false;
    protected $fillable = [
        'client_id',
        'orderDate',
        'source',
        'status'];

    public function statusData(){
        return $this->hasOne(OrderStatus::class,'option_id','status');
    }

    public function eventData(){
        return $this->hasOne(Event::class,'order_id','order_id');
    }
}
