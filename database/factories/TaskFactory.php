<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Task;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\task>
 */
class TaskFactory extends Factory
{
    protected $model = Task::class;


    public function definition(): array
    {
        return [
            'title'=> fake()->sentence,
            'description'=>fake()->paragraph,
            'long_description'=>fake()->paragraph(7,true),
            'completed'=>fake()->boolean
        ];
    }
}
