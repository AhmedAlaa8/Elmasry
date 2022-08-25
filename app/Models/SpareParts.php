<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SpareParts extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'image_s',
        'salary',
        'detilse',
        'existing',

    ];
}
