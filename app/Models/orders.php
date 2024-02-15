<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = [
        'order_id',
        'invoice_id',
        'order_status',
        'order_total',
        'user_id',
        'order_date'
    ];
    public $timestamps = true;
}
