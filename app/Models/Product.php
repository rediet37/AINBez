<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title', 'code_name', 'description', 'location', 'status', 'year', 'price', 'discount', 'category', 'featured', 
        'postedBy'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'category' => 'array',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'postedBy');
        // return $this->belongsTo('App\Models\User', 'postedBy');
    }

    public function images()
    {
        return $this->belongsTo(Image::class, 'id', 'product_id',);
    }
}
