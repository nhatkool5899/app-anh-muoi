<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;

    public $timestamp = false;
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price',
    ];

    protected $primary = 'id';
    protected $table = 'tbl_order_details';
}
