<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Directorate extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'body',
        'roles',
        'directors_image_id',
        'directorate_image_id',
    ];

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function directorsImage()
    {
        return $this->belongsTo(Image::class, 'directors_image_id');
    }

    public function directorateImage()
    {
        return $this->belongsTo(Image::class, 'directorate_image_id');
    }
}
