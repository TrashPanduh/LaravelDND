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
    public $proficiencyBonus = [ 0, 2, 2, 2, 2, 3, 3, 3, 3, 4, 4, 4, 4, 5, 5, 5, 5, 6, 6, 6, 6];

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

    // Accessors for attributes

    public function getStrAttribute()
    {
        return $this->base_str + $this->race->str_mod;
        // return $this->base_str + $this->race->str_mod + $this->class->str_mod + $this->items->sum('str_mod');
    }

    public function getDexAttribute()
    {
        return $this->base_dex + $this->race->dex_mod;
    }
    
    public function getConAttribute()
    {
        return $this->base_con + $this->race->con_mod;
    }
    
    public function getIntAttribute()
    {
        return $this->base_int + $this->race->int_mod;
    }
    
    public function getWisAttribute()
    {
        return $this->base_wis + $this->race->wis_mod;
    }
    
    public function getChaAttribute()
    {
        return $this->base_cha + $this->race->cha_mod;
    }
    // Modifier Accessors
    public function getHpModifierAttribute()
    {
        return $this->HP + $this->modifiers[min(30,  $this->con)];
    }

    public function getStrModifierAttribute()
    {
        return $this->modifiers[min(30,  $this->str)];
    }
    public function getDexModifierAttribute()
    {
        return $this->modifiers[min(30,  $this->dex)];
    }
    public function getConModifierAttribute()
    {
        return $this->modifiers[min(30,  $this->con)];
    }
    public function getIntModifierAttribute()
    {
        return $this->modifiers[min(30,  $this->int)];
    }
    public function getWisModifierAttribute()
    {
        return $this->modifiers[min(30,  $this->wis)];
    }
    public function getChaModifierAttribute()
    {
        return $this->modifiers[min(30,  $this->cha)];
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
    // write a function for 'swim_speed' to be displayed

    // write a function for armor class

    // write a relationship and function for adding a background

    //write a function to add a proficieny in the json format on character

    // write the relationships for adding a prof for race and background


    public function getArmorClassAttribute()
    {
        return $this->dex_modifier + 8;
    }
}
