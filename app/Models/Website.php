<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    protected $fillable = [
    'website_name', 'website_number', 'website_email', 'website_fb',
    'website_insta', 'website_in', 'website_address', 'footer_about','about_us','about_us_heading'
];
}
