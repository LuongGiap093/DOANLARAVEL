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
        'content',
        'status',
        'icon',
    ];
    protected $primaryKey = 'id';
    public function product()
    {
        return $this->hasMany('App\Models\Product','id');
    }
    public function brands()
    {
        return $this->hasMany('App\Models\Brand','id');
    }
}
