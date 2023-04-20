<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    public $timestamp = false;
    protected $fillable = [
        'product_id',
        'name',
        'description',
        'discount',
        'time_start',
        'time_end',
    ];

    protected $primary = 'id';
    protected $table = 'tbl_sales';
}
