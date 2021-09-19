<?php

namespace App\Models;

use App\Models\Item;
use App\Models\Race;
use App\Models\CharacterClass;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Character extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Relationships

    public function characterClasses()
    {
        return $this->belongsToMany(CharacterClass::class, 'character_class_assignments');
    }

    public function characterItems()
    {
        return $this->hasMany(CharacterItem::class);
    }
    
    public function items()
    {
        return $this->belongsToMany(Item::class, 'character_items');
    }

    public function race()
    {
        return $this->belongsTo(Race::class);
    }

    // Accessors

    public function getStrAttribute()
    {
        return $this->base_str;
    }

    public function getDexAttribute()
    {
        return $this->base_dex;
    }
    
    public function getConAttribute()
    {
        return $this->base_con;
    }
    
    public function getIntAttribute()
    {
        return $this->base_int;
    }
    
    public function getWisAttribute()
    {
        return $this->base_wis;
    }
    
    public function getChaAttribute()
    {
        return $this->base_cha;
    }
}
