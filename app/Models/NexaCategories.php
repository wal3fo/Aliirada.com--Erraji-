<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NexaCategories extends Model
{
    use HasFactory;

    protected $table = 'nexa_categories';

    protected $primaryKey = 'Id';

    public $timestamps = false;

    protected $fillable = [
        'Name',
        'About',
        'Locked',
        'TimeOf',
    ];

    protected $casts = [
        'Locked' => 'boolean',
        'TimeOf' => 'datetime',
    ];

    public function products()
    {
        return $this->hasMany(NexaProducts::class, 'Category', 'Id');
    }
}
