<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Details extends Model
{
    use HasFactory;
    protected $table='order_details';
    protected $fillable = [
        'quantity',
        'unit_price',
        'order_id',
        'product_id',
       
    ];
    protected $primaryKey = 'order_details_id';
    public function owner(){
        return $this->belongsTo('User');
    }
    public function product(){
        return $this->belongsTo('App\Models\Product', 'id','order_details_id');
    }
    public function order(){
        return $this->belongsTo('App\Models\Order', 'order_id','order_details_id');
    }
}
