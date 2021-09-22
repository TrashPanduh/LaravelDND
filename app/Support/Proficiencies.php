<?php

namespace App\Support;

class Proficiencies
{
    public static $acrobatics = 'Acrobatics';
    public static $animal_handling = 'Animal Handling';
    public static $arcana = 'Arcana';
    public static $athletics = 'Athletics';
    public static $deception = 'Deception';
    public static $history = 'History';
    public static $insight = 'Insight';
    public static $intimidation = 'Intimidation';
    public static $investigation = 'Investigation';
    public static $medicine = 'Medicine';
    public static $nature = 'Nature';
    public static $perception = 'Perception';
    public static $performance = 'Performance';
    public static $persuasion = 'Persuasion';
    public static $religion = 'Religion';
    public static $sleight_of_hand = 'Sleight of Hand';
    public static $stealth = 'Stealth';
    public static $survival = 'Survival';

    public static $map = [
        'acrobatics' => 'dex',
        'animal_handling' => 'wis',
        'arcana' => 'int',
        'athletics' => 'str',
        'deception' => 'cha',
        'history' => 'int',
        'insight' => 'wis',
        'intimidation' => 'cha',
        'investigation' => 'int',
        'medicine' => 'wis',
        'nature' => 'int',
        'perception' => 'wis',
        'performance' => 'cha',
        'persuasion' => 'cha',
        'religion' => 'int',
        'sleight_of_hand' => 'dex',
        'stealth' => 'dex',
        'survival' => 'dex',
    ];
}