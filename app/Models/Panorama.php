<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
     * Get all additional information for this panorama
     */
    public function additionalinformations()
    {
        return $this->hasMany(additionalinformations::class);
    }
}