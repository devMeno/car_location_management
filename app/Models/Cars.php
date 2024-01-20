<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Cars extends Model
{
    use HasFactory;

    protected $fillable=[
        'brand',
        'model',
        'fuel',
        'transmission',
        'description',
        'places',
        'color',
        'price',
        'available',
        'image1_path',
        'image2_path'
    ];

    public function getSlug(){
        return Str::slug($this->brand);
    }
}
