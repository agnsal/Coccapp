<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chicken extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'is_female', 'birth_date', 'details'];

    public function breed(){
        return $this->belongsTo(Breed::class);
    }

    public function coop(){
        return $this->belongsTo(Coop::class);
    }

}
