<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'content'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'content' => 'array',
    ];

    /**
     * The attributes that should be muated to dates.
     *
     * @var array
     */
    protected $dates = [
        'published_at',
        'created_at',
        'updated_at'
    ];

    /**
     * Get the route key for the model
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'url';
    }

    /**
     * Get a string path for the article.
     */
    public function path()
    {
        return "/{$this->url}/";
    }

    /**
     * Get the user that owns the Article
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    /**
     * Get all of the tags for the Article
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tags()
    {
        return $this->hasMany(Tag::class);
    }

    /**
     * Get all of the comments for the Article
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
