<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'content', 'category_id', 'slug', 'thumbnail', 'is_published', 'published_at', 'user_id'
    ];

    protected static function boot()
    {
        parent::boot();

        // Automatically set user_id for new posts
        static::creating(function ($post) {
            // If user_id is not set, assign the currently authenticated user
            if (!$post->user_id) {
                $post->user_id = auth(); // Get the ID of the currently authenticated user
            }

            // If slug is not provided, generate it from the title
            if (!$post->slug) {
                $post->slug = Str::slug($post->title);
            }
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class); // Pastikan ini ada
    }

    public function user()
    {
        return $this->belongsTo(User::class); // Pastikan ini ada
    }

    public function getPublishedAtAttribute($value)
    {
        return Carbon::parse($value); // Mengonversi ke objek Carbon
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
