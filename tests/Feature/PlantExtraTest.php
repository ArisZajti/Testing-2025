<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Plant;

class PlantExtraTest extends TestCase
{
    use RefreshDatabase;

    public function test_plant_list_page_loads()
    {
        $response = $this->get('/plants');
        $response->assertStatus(200);
        $response->assertSee('Plants');
    }

    public function test_edit_plant_page_loads()
    {
        $plant = Plant::create([
            'name' => 'Edit Me',
            'species' => 'Test',
            'description' => 'Edit test',
        ]);
        $response = $this->get('/plants/' . $plant->id . '/edit');
        $response->assertStatus(200);
        $response->assertSee('Edit Plant');
    }

    public function test_show_plant_page_loads()
    {
        $plant = Plant::create([
            'name' => 'Show Me',
            'species' => 'Test',
            'description' => 'Show test',
        ]);
        $response = $this->get('/plants/' . $plant->id);
        $response->assertStatus(200);
        $response->assertSee('Plant Details');
    }

    public function test_update_plant()
    {
        $plant = Plant::create([
            'name' => 'Old Name',
            'species' => 'Old Species',
            'description' => 'Old Description',
        ]);
        $response = $this->put('/plants/' . $plant->id, [
            'name' => 'New Name',
            'species' => 'New Species',
            'description' => 'New Description',
        ]);
        $response->assertRedirect('/plants');
        $this->assertDatabaseHas('plants', ['name' => 'New Name']);
    }

    public function test_cannot_update_plant_with_empty_name()
    {
        $plant = Plant::create([
            'name' => 'Old Name',
            'species' => 'Old Species',
            'description' => 'Old Description',
        ]);
        $response = $this->put('/plants/' . $plant->id, [
            'name' => '',
            'species' => 'New Species',
            'description' => 'New Description',
        ]);
        $response->assertSessionHasErrors('name');
    }
}

// Move all test classes into the Feature folder for unified testing
