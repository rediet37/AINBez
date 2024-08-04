<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroCarousel extends Model
{
    use HasFactory;

    protected $fillable = ['image_path', 'hero_text_title', 'hero_text_content', 'discover_url', 'download_url', 'enquiry_url']
}
