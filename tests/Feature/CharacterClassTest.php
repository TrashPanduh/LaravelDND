<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Character;
use App\Models\CharacterClass;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CharacterClassTest extends TestCase
{
    
    public function test_a_character_class_is_set_successfully()
    {
        // Create a character
        $character = Character::create([
            'name' => 'jeff',
            'base_wis_modifier' => 3,
            'HP' => 10,
            'character_id' => 1,

        ]);

        // Create a CharacterClass
        $characterclass = CharacterClass::create([
            'name' => 'Bard'
        ]);

        // Assign that CharacterClass to the Character
        $character->characterClasses()->save($characterclass);

        // Assert that Character's CharacterClass is the class we expect
        $this->assertEquals('Bard', $character->characterClasses->first()->name);
    }
}
