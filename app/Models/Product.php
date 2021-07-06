<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\model\Image;

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
        'describe',
        'status',
        'idcat',
        'brand_id'
    ];
    protected $primaryKey = 'id';
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'idcat', 'id');
    }
    public function brands()
    {
        return $this->belongsTo('App\Models\Brand', 'brand_id', 'id');
    }
    public function order_details()
    {
        return $this->hasMany('App\Models\Order_Details', 'id');
    }
    public function wishlist(){
    return $this->hasMany(Wishlist::class);
    }
}
