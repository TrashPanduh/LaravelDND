<?php

namespace App\Models;

use App\Models\Item;
use App\Models\Race;
use App\Models\CharacterClass;
use Illuminate\Database\Eloquent\Model;
use App\Support\Proficiencies;
use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Character extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $casts = [
        'proficiencies' => AsCollection::class,
        'expertise' => AsCollection::class,
    ];

    public $modifiers = [ -5, -5, -4, -4, -3, -3, -2, -2, -1, -1, 0, 0, 1, 1, 2, 2, 3, 3, 4, 4, 5, 6, 6, 6, 7, 7, 8, 8, 9, 9, 10];
    public $proficiencyBonus = [ 3, 3, 3, 4];

    // Relationships

    public function characterClasses()
    {
        return $this->belongsToMany(CharacterClass::class, 'character_class_assignments');
    }

    public function modifierRelationship()
    {
        return $this->belongsToMany(Character::class, 'modifiers');
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
        // return $this->base_str + $this->race->str_mod + $this->class->str_mod + $this->items->sum('str_mod');

    }

    public function getStrModifierAttribute()
    {
        return $this->modifiers[min(30,  $this->str)];
    }

    public function getProfBonusAttribute()
    {
        return $this->proficiencyBonus[$this->level];
    }

    public function skillModifier($skill)
    {
        $modifier = Proficiencies::$map[$skill] . '_modifier';

        $base = $this->$modifier; // $this->str_modifier

        $prof_bonus = $this->proficiencies?->contains(Proficiencies::$$skill)
            ? $this->prof_bonus
            : 0;

        $expertise_bonus = $this->expertise?->contains(Proficiencies::$$skill)
            ? $this->prof_bonus
            : 0;

        return $base + $prof_bonus + $expertise_bonus;
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
