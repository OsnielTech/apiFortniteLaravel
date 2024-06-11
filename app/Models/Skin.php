<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skin extends Model
{
    use HasFactory;

    protected $table = 'Skin';
    protected $fillable = [

        'nameSkin',
        'seasonSkin',
        'chapterSkin',
        'setSkin',
        'rarityLevelSkin',
        'priceSkin'


    ];
}
