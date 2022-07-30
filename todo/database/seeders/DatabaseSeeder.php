<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    
    //Boa pratica - Outro método de inserir dados é chamar o seeder
    //UserSeeder criado para um dado especifico
    //Devem ser colocados na ordem de criação
    // $this->call([
    // UserSeeder::class,
    // ]);

    //Trabalhando com factories
    User::factory(40)->create();
    Category::factory(30)->create();
    Task::factory(100)->create();


    
    //Método para inserir dados diretamente deste arquivo original
    
    //     \App\Models\User::factory()->create([
    //         'name'=>'Charles Pereira',
    //         'email'=>'charles@email.com',
    //         'password'=> Hash::make('123456')

    //     ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
