<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modifier extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    protected $table = 'characters';

    public function modify()
    {
        return $this->belongsToMany(Character::class, 'characters');
    }
}
