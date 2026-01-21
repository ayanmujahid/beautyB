<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'short_description',
        'long_description',
        'price',
        'discounted_price',
        'stock',
    ];

    // Relationship to files
    public function files()
    {
        return $this->morphMany(File::class, 'fileable');
    }

    public function mainImage()
    {
        return $this->morphOne(File::class, 'fileable')->where('table_name', 'main_image');
    }

    public function gallery()
    {
        return $this->morphMany(File::class, 'fileable')->where('table_name', 'gallery');
    }
}
