<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class createdUserAndAddressSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name" => "Beltrano",
            "email" => "beltrano@email.com",
            "password" => Hash::make("123456")
        ]);

        DB::table('addresses')->insert([
            "address"=>"Rua do Beltrano, 25"
        ]);
    }
}
