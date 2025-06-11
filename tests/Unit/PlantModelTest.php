<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Plant;

class PlantModelTest extends TestCase
{
    /**
     * Test Plant model mass assignment.
     */
    public function test_plant_mass_assignment()
    {
        $plant = new Plant([
            'name' => 'Unit Plant',
            'species' => 'Unit Species',
            'description' => 'Unit Description',
        ]);
        $this->assertEquals('Unit Plant', $plant->name);
        $this->assertEquals('Unit Species', $plant->species);
        $this->assertEquals('Unit Description', $plant->description);
    }
}
