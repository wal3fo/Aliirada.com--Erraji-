<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NexaPictures extends Model
{
    use HasFactory;

    protected $table = 'nexa_pictures';

    protected $primaryKey = 'Id';

    public $timestamps = false;

    protected $fillable = [
        'Name',
        'ProductId',
        'TimeOf',
    ];

    protected $casts = [
        'ProductId' => 'integer',
        'TimeOf' => 'datetime',
    ];

    // Optional: Define relationship to NexaProduct
    public function product()
    {
        return $this->belongsTo(NexaProducts::class, 'ProductId', 'Id');
    }
}
