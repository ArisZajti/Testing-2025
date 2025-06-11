<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Plant;

class PlantCrudTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Happy path: user can create a plant.
     */
    public function test_user_can_create_plant()
    {
        $response = $this->post('/plants', [
            'name' => 'Test Plant',
            'species' => 'Test Species',
            'description' => 'Test Description',
        ]);
        $response->assertRedirect('/plants');
        $this->assertDatabaseHas('plants', ['name' => 'Test Plant']);
    }

    /**
     * Unhappy path: user cannot create a plant without a name.
     */
    public function test_user_cannot_create_plant_without_name()
    {
        $response = $this->post('/plants', [
            'name' => '',
            'species' => 'Test Species',
            'description' => 'Test Description',
        ]);
        $response->assertSessionHasErrors('name');
    }

    /**
     * Happy path: user can delete a plant.
     */
    public function test_user_can_delete_plant()
    {
        $plant = Plant::create([
            'name' => 'Delete Me',
            'species' => 'Test',
            'description' => 'To be deleted',
        ]);
        $response = $this->delete('/plants/' . $plant->id);
        $response->assertRedirect('/plants');
        $this->assertDatabaseMissing('plants', ['id' => $plant->id]);
    }
}
