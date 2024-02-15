<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'product_id';
    protected $fillable = [
        'product_id',
        'name',
        'description',
        'status',
        'category_id',
        'price',
        'weight',
        'img_url'
    ];
    public $timestamps = true;
}
