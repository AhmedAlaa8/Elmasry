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
        'spare_parts_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function spare_parts()
    {
        return $this->belongsTo(SpareParts::class, 'spare_parts_id');
    }
}
