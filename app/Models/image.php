<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'imageable_id',
        'imageable_type',
        'path'
    ];

    public function imageable()
    {
        return $this->morphTo();
    }

    public function getPathAttribute($value)
    {
        return asset('storage/' . $value);
    }

}
