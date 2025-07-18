<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
   protected $fillable = [
    'name',
    'image',
    'description',
    'status',
    'type',
    'fees',
    'duration',
    'start_date',
    'hours',
];
public function topics()
{
    return $this->hasMany(Topic::class)->where('status', true);
}
}
