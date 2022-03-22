<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coop extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'details'];

    public function users()
    {
        return $this->belongsToMany(User::class,'coops_users');
    }

}
