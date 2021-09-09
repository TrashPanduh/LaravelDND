<?php

namespace Tests\Feature;


use Tests\TestCase;
use app\Models\Character;
use App\Models\CharacterInventory;

use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CharacterInventoryTest extends TestCase
{
    
   
    public function test_a_character_inventory_is_set_successfully()
    {    
        // Create a character Gotte
        $character = Character::create([
            'name' => 'Gotte',
            'HP' => 10,
            'character_id' => 3,
        ]);
 
        // Set healwell inventory for id 3 to 5
        $characterinventory = CharacterInventory::create([
            'character_id' => 3,
            'healwell' => 5,
        ]);
        /* 
        // Create new field "pack"
        $character->characterInventory()->save($characterinventory);
        Schema::create('users', function($table) { $table->integer("paied"); $table->string("title"); $table->text("description"); $table->timestamps(); });
        */
        //Save inventory
        $character->characterInventory()->save($characterinventory);
        
        // Assert that Character's CharacterClass is the class we expect
        //$this->assertEquals(3, $character->characterinventory->first()->healwell);
        
    }
}
 

