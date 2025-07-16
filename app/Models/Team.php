<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
      protected $fillable = [
        'name_employee',
        'designation_employee',
        'image',
        'fb_link',
        'insta_link',
        'linked_link',
    ];
}
