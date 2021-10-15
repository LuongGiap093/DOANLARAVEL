<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table='comment';
    public $timestamps = false;
    protected $fillable = [
        'product_id',
        'comment_content',
        'create_date',
        'comment_status',
    ];
    protected $primaryKey = 'comment_id';
    public function product()
    {
        return $this->belongsTo('App\Models\Comment', 'product_id', 'id');
    }
}
