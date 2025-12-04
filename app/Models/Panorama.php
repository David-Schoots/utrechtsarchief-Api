<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class Panorama extends Model
{
    protected $fillable = [
        'page',
        'title',
        'page_number',
        'catalog_number',
        'description',
        'img',
    ];

    /**
     * Get the full URL for the image
     *
     * @return string
     */
    public function getImageUrlAttribute()
    {
        if (empty($this->img)) {
            return null;
        }
        
        // If the image path is already a full URL, return it as is
        if (filter_var($this->img, FILTER_VALIDATE_URL)) {
            return $this->img;
        }
        
        // Generate the full URL with localhost:8000 as the base
        $baseUrl = 'http://localhost:8000';
        $imagePath = ltrim($this->img, '/\\');
        
        return "{$baseUrl}/storage/{$imagePath}";
    }

    /**
     * Get all additional information for this panorama
     */
    public function additionalinformations()
    {
        return $this->hasMany(additionalinformations::class);
    }
}