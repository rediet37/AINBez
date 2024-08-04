<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webpage extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'color', 'color2', 'description', 'slides', 'features', 'industries', 'services_header', 'services', 
        'faqs', 'about_page_header', 'about_page_header_desc', 'about_us_title1', 'about_us_desc1', 'about_us_title2',
        'about_us_desc2', 'about_value_title1', 'about_value_desc1', 'about_value_title2', 'about_value_desc2',
        'about_value_title3', 'about_value_desc3', 'about_mission_statement', 'about_mission_desc', 
        'contact_page_header', 'contact_office', 'contact_office_hours', 'contact_front_desk_phone',
        'contact_front_desk_email',

    ];
    
    protected $casts = [
        'slides' => 'json',
        'industries' => 'json',
        'services' => 'json',
        'faqs' => 'json',
    ];
}
