<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'image',
        'slug',
        'user_id',
        'category_id'
    ];

    /**
     * @return BelongsTo
     * @description get the category for the blog post.
     */
    public function category(): HasOne
    {
        return $this->belongsTo(Category::class);
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
