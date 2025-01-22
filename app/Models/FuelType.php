<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuelType extends Model
{
    use HasFactory;

    // protected $table = 'car_fuel_types';
    // public $incrementing = false;
    // protected $keyType = 'string';

    public $timestamps = false;

    protected $fillable = [
        'name',
    ];
}
