<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    /**
     * The attributes that should be muated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
    ];
}
