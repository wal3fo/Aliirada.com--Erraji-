<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NexaProducts extends Model
{
    use HasFactory;

    protected $table = 'nexa_products';

    protected $primaryKey = 'Id';

    public $timestamps = false;

    protected $fillable = [
        'Name',
        'Description',
        'Category',
        'Quantity',
        'PriceOf',
        'Landing',
        'Popularity',
        'TimeOf',
    ];

    protected $casts = [
        'TimeOf' => 'datetime',
    ];

    public function category()
    {
        return $this->belongsTo(NexaCategories::class, 'Category');
    }

    public function pictures()
    {
        return $this->hasMany(NexaPictures::class, 'ProductId');
    }

    public function sizes()
    {
        return $this->hasMany(NexaVariants::class, 'ProductId')->where('Type', 'Size');
    }
}
