<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Server>
 */
class ServerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hostname' => $this->faker->unique()->domainName(),
            'ip_address' => $this->faker->unique()->ipv4(),
            'control_panel' => $this->faker->randomElement(['cPanel', 'Plesk', 'DirectAdmin', null]),
            'control_panel_version' => $this->faker->optional()->numerify('v#.##'),
        ];
    }
}
