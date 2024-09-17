<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = ['title', 'content', 'summary', 'cover_image_path', 'author_id', 'tags', 'views_count'];

    protected $casts = ['tags' => "array"];

    public function author()
        {
            return $this->belongsTo(User::class, 'author_id', 'id');
        }

}
