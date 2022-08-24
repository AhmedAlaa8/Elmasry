<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'adress',
        'phone',
        'phone2',
        'salary',
        'user_id',
        'car_id',
        'spare_parts_id',
    ];
}
