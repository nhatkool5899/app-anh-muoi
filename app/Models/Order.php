<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $timestamp = false;
    protected $fillable = [
        'name',
        'phone',
        'address',
        'status',
    ];

    protected $primary = 'id';
    protected $table = 'tbl_order';

    public function details()
    {
        return $this->hasMany(OrderDetails::class, 'order_id', 'id');
    }
}
