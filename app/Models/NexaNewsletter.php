<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NexaNewsletter extends Model
{
    protected $table = 'nexa_newsletter';
    protected $primaryKey = 'Id';
    public $timestamps = false;

    protected $fillable = [
        'Email',
        'Locked',
        'TimeOf',
    ];

    protected $casts = [
        'Locked' => 'boolean',
        'TimeOf' => 'datetime',
    ];
}
