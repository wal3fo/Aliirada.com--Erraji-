<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NexaUsers extends Model
{
    use HasFactory;

    protected $table = 'nexa_users';

    protected $primaryKey = 'Id';

    public $timestamps = false;

    protected $fillable = [
        'Name',
        'Email',
        'Password',
        'Job',
        'Operator',
        'Registration',
        'TimeOf',
    ];

    protected $casts = [
        'Operator' => 'integer',
        'Registration' => 'datetime',
        'TimeOf' => 'datetime',
    ];
}
