<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'name',
        'description'
    ];

    /**
     * The attributes that should be muated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'deleted_at'
    ];

    /**
     * Get all of the articles that are assigned this tag.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function articles()
    {
        return $this->morphedByMany(Article::class, 'taggable');
    }
}
