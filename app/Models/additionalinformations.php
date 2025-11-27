<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class additionalinformations extends Model
{
    protected $fillable = [
        'id',
        'title',
        'panorama_id',
        'description',
        'img',
        'cordinate_x',
        'cordinate_y',
    ];

    /**
     * Get the panorama this additional information belongs to
     */
    public function panorama()
    {
        return $this->belongsTo(Panorama::class);
    }
}