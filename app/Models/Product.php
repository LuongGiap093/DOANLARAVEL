<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='product';
    protected $fillable = [
        'name',
        'image',
        'price',
        'discount',
        'content',
        'idcat',
    ];
    protected $primaryKey = 'id';
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'idcat', 'id');
    }
    public function order_details()
    {
        return $this->hasMany('App\Models\Order_Details', 'id', 'order_details_id');
    }
}
