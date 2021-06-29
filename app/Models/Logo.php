<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;
    protected $table='logos';
    protected $fillable = [
        'image',
        'status',
    ];
    protected $primaryKey = 'logos_id';
    public function owner(){
        return $this->belongsTo('User');
    }
}
