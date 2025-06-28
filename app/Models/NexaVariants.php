<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NexaVariants extends Model
{
    protected $table = 'nexa_variants';
    protected $primaryKey = 'Id';
    public $timestamps = false;

    protected $fillable = [
        'Name',
        'Type',
        'NLong',
        'ProductId',
    ];

    // Optionally define relationship if you have a NexaProducts model
    public function product()
    {
        return $this->belongsTo(NexaProducts::class, 'ProductId');
    }
}