<?php

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
        // $this->call(UsersTableSeeder::class);
        App\User::create([
            'name' => 'Jefrei Hernandez T',
            'email' => 'jeffreiht@gmail.com',
            'password' => bcrypt('16052010')
        ]);
        
        factory(App\Task::class, 26)->create();
    }
}
