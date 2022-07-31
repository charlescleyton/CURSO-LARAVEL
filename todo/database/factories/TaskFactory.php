<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
//Tratando dados para n criar conflitos caso haja mais user do que categories
        $user = User::all()->random();
        while(count($user->categories)==0){
            $user = User::all()->random();
        }

        return [
            'is_done'=> fake()->boolean(),
            'title' => fake()->text(30),
            'description' => fake()->text(30),
            'due_date' => fake()->dateTime(),
            //'user_id' =>User::all()->random(), para indicar que a tabela Task vai gerar os id para
            //usuário aleatoriamente de acordo com a quantidade de usuário existente 
            
            'user_id' => $user,
            
            //'category_id' =>Category::all()->random(), para indicar que a tabela Task vai gerar os id para
            //categoria aleatoriamente de acordo com a quantidade de categoria existente 
            'category_id' => $user->categories->random(),
            //
        ];
    }
}
