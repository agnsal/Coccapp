<?php

namespace App\Models;

use App\Enums\BreedEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    use HasFactory;

    protected $fillable = ['details'];

    protected $casts = [
        'name' => BreedEnum::class
    ];

    public function chickens(){
        return $this->hasMany(Chicken::class);
    }

    public function eggs(){
        return $this->hasMany(Egg::class);
    }

}
