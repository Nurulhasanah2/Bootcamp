<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_items extends Model
{
    use HasFactory;

    protected $table = 'order_items';
    protected $fillable = [
        'order_item_id',
        'order_id',
        'product_id',
        'product_name',
        'product_price',
        'qty',
        'subtotal'
    ];
    public $timestamps = true;
}
