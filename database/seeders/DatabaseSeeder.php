<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

       /* \App\Models\User::factory(10)->create();   //create random trainee and admin account*/

   /*      \App\Models\User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
         ]);*/

        // $this->call(RoleSeeder::class);
        $this->call(AdminSeeder::class);  //create admin account

    }
}
