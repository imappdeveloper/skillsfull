<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
  protected $fillable = [
        'training_id',
        'topic_name',
        'topic_description',
        'status',
    ];

    public function training()
    {
        return $this->belongsTo(Training::class);
    }

    public function topics()
{
    return $this->hasMany(Topic::class);
}
}
