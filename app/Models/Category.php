<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table='category';
    protected $fillable = [
        'name',
        'image',
        'price',
        'discount',
        'content',
    ];
    protected $primaryKey = 'id';
    public function product()
    {
        return $this->hasMany('App\Models\Product','id');
    }
}
