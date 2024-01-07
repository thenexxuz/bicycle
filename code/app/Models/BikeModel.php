<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BikeModel extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'brand',
        'price',
        'description',
        'gender',
        'category',
        'wheel_size',
    ];
}
