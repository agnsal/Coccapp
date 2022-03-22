<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egg extends Model
{
    use HasFactory;

    protected $fillable = ['damaged', 'layed_at', 'details'];

    public function breed(){
        return $this->belongsTo(Breed::class);
    }

    public function coop(){
        return $this->belongsTo(Coop::class);
    }
}
