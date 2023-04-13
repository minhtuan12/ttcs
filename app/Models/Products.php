<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'prod_name',
        'descr',
        'buy_date',
        'condition',
        'material',
        'size',
        'category_id',
        'img'
    ];
}
